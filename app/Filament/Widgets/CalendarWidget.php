<?php

namespace App\Filament\Widgets;


use App\Models\Calendar;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use DateInterval;
use DateTime;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use Saade\FilamentFullCalendar\Widgets\FullCalendarWidget;
use App\Filament\Resources\EventResource;
use Filament\Forms;

class CalendarWidget extends FullCalendarWidget
{
    // protected static string $view = 'filament.widgets.calendar-widget';

    public Model | string | null $model = Event::class;
    private $event;


    protected static ?string $heading = 'Total customers';


    public function fetchEvents(array $fetchInfo): array
    {

        $admin_events=Event::query()
            ->where('start', '>=', $fetchInfo['start'])
            ->where('end', '<=', $fetchInfo['end'])
            ->get()
            // ->map(
            //     fn (Event $event) => [
            //             'id' => $event->id,
            //             'google_id' => $event->google_id ?? null,
            //                 'title' => $event->title,
            //                 'start' => $event->start,
            //                 'end' => $event->end,
            //                 'backgroundColor' => $event->backgroundColor,
            //                 'bordercolor' => $event->bordercolor,
            //                 'shouldOpenUrlInNewTab' => true
            //             ]
            // )
            ->all();

        if ($gcal = \Spatie\GoogleCalendar\Event::get(startDateTime: Carbon::now()->subDays(14))) {

            $google_events = $gcal->map(
                function ($events) {
                    $color_id = $events->colorId ? $events->colorId : 'undefined';
                    $calendar = Calendar::select('id', 'color')
                        ->where('color_id', '=', $color_id)->get();
                    return [
                    'id' => $events->id,
                    'title' => $events->summary . ' **GOOGLE-CALENDAR**',
                    'start' => Carbon::parse($events->startDateTime)->toDateTimeString(),
                    'end' => Carbon::parse($events->endDateTime)->toDateTimeString(),
                    'backgroundColor' => $calendar[0]->color,
                    'borderColor' => $calendar[0]->color,
                    'calendar_id' => $calendar[0]->id,
                    ];
                }
            )->toArray();

            $google_events_collection = collect($google_events);
            $items = array();
            foreach ($admin_events as $event) {
                array_push($items, $event['google_id']);
            }

            $filter = $google_events_collection->whereNotIn('id', $items)->toArray();


            return array_merge($filter, $admin_events);
        }
        return $admin_events;
    }
    /**
     * @return void
     * @param  mixed $param
     */
    public function url($param): void
    {
        if (is_numeric($param['id'])) {            // google_id is none numeric  local events have primary key numeric
            $event = Event::find($param['id'])->toArray();
            $url = EventResource::getUrl('edit', ['record' => $event['id']]);

        } else {
            $user = User::where('name1', 'like', '%' . explode(' ', $param['title'])[0] . '%')->first();
            $new = new Event();
            $new->google_id = $param['id'];
            $new->title = explode(' *', $param['title'])[0];
            $new->start = $param['start'];
            $new->end = $param['end'];
            $new->author_id = auth()->id();
            $new->calendar_id = $param['extendedProps']['calendar_id'];

            if ($user) {
                $new->user_id = $user['id'];
            } else {
                $new->user_id = User::where('name1', '=', 'KUNDE')->first()['id'];
            }

            $new->save();

            $url = EventResource::getUrl('edit', ['record' => $new->id]);
        }

        $this->redirect($url);


    }

    public function onEventClick($event): void
    {
        // parent::onEventClick($event);

        $this->url($event);

    }

    public function getFormSchema(): array
    {
        return [

            Forms\Components\Grid::make()
                ->schema(
                    [
                    Forms\Components\TextInput::make('title')
                        ->label(__('filament::widgets/calendar-widget.title'))
                        ->required()
                        ->columnSpan(4),
                    Forms\Components\DateTimePicker::make('start')
                        ->label(__('filament::widgets/calendar-widget.start'))
                        ->seconds(false)
                        ->required()
                        ->columnSpan(2),
                    Forms\Components\DateTimePicker::make('end')
                        ->label(__('filament::widgets/calendar-widget.end'))
                        ->seconds(false)
                        ->required()
                        ->columnSpan(2),

                    ]
                )->columns(4)
        ];
    }


    public function onEventDrop($newEvent, $oldEvent, $relatedEvents,$delta): bool
    {

        $this->event = Event::find($newEvent['id']);
        // dd($newEvent, $oldEvent, $delta);
        if (!array_key_exists('end', $newEvent)) {
            $dt = DateTime::createFromFormat("Y-m-d\TH:i:s\Z", $newEvent['start']);
            if ($dt) {
                $dt->add(new DateInterval('PT1H'));
                $newEvent['end'] = $dt->format('Y-m-d\TH:i:s\Z');
                $newEvent['allDay'] = false;
                $newEvent['extendedProps']['allDay'] = false;
            } else {
                $newEvent['allDay'] = true;
                $newEvent['extendedProps']['allDay'] = true;

            }
        }

        $this->event->update($newEvent);

            Notification::make()
                ->title('Eintrag geändert')
                ->icon('heroicon-o-document-text')

                ->duration(5000)
                ->send();
        return false;

    }

    protected function headerActions(): array
    {
        return [
        \Saade\FilamentFullCalendar\Actions\CreateAction::make()
            ->mountUsing(
                function (Forms\Form $form, array $arguments) {
                    $form->fill(
                        [
                        'start' => $arguments['start'] ?? null,
                        'end' => $arguments['end'] ?? null
                        ]
                    );
                }
            ),
            ];
    }

    // protected function modalActions(): array
    // {
    //     return [
    //         \Saade\FilamentFullCalendar\Actions\EditAction::make()
    //             ->mountUsing(
    //                 function (Event $record, Forms\Form $form, array $arguments) {
    //                     $form->fill(
    //                         [
    //                             'title' => $record->title,
    //                             'start' => $arguments['event']['start'] ?? $record->start,
    //                             'end' => $arguments['event']['end'] ?? $record->end
    //                         ]
    //                     );
    //                 }
    //             )
    //     ];
    // }
}


