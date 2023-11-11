<?php

namespace App\Filament\Widgets;


use App\Models\Event;
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

        return Event::query()
            ->where('start', '>=', $fetchInfo['start'])
            ->where('end', '<=', $fetchInfo['end'])
            ->get()
            ->map(
                fn (Event $event) => [
                    'id' => $event->id,
                    'title' => $event->title,
                    'start' => $event->start,
                    'end' => $event->end,
                    'backgroundColor' => $event->backgroundColor,
                    'bordercolor' => $event->bordercolor,
                    'url' => EventResource::getUrl(name: 'edit', parameters: ['record' => $event]),
                    'shouldOpenUrlInNewTab' => true
                ]
            )
            ->all();
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
                )->columns('4'),


                Forms\Components\Section::make()
                    ->schema([

                    Forms\Components\Toggle::make('extendedProps.allDay')
                        ->label(__('filament::widgets/calendar-widget.allday'))
                        ->columnSpan(2),
                    ])
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
