<?php

namespace App\Observers;

use App\Models\Event;
use Carbon\CarbonInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RecurrenceObserver
{
    private static $request;

    public function __construct(Request $request)
    {
        static::$request = $request;

    }

    /**
     * Handle the Event "created" event.
     */
    public function created(Event $event): void
    {
        //
        if (!$event->event()->exists()) {
            $recurrences = [
                1 => [   // weekly
                    'times' => 7,
                    'function' => 'addDay',
                    'value' => 1,
                ],
                2 => [   // weekly
                    'times' => 52,
                    'function' => 'addWeek',
                    'value' => 1,
                ],
                3 => [   // every 14th day
                    'times' => 26,
                    'function' => 'addWeek',
                    'value' => 2
                ],
                4 => [   // every 3rd week
                    'times' => 12,
                    'function' => 'addWeek',
                    'value' => 3
                ],
                5 => [   // monthly
                    'times' => 12,
                    'function' => 'addMonth',
                    'value' => 1
                ],
                6 => [   //  every 3d month
                    'times' => 4,
                    'function' => 'addMonth',
                    'value' => 3
                ],
                7 => [   //  every half year
                    'times' => 2,
                    'function' => 'addMonth',
                    'value' => 6
                ],
                8 => [   //  every  year
                    'times' => 2,
                    'function' => 'addMonth',
                    'value' => 12
                ],

            ];
            $start = Carbon::parse($event->start);
            $end = Carbon::parse($event->end);
            $recurrence = $recurrences[$event->recurrence] ?? null;


            //            $event->client()->associate(static::$request['event']['extendedProps']['client']['id']);

            //            $event->client()->associate($event->user_id);
            //            $event->calendar()->associate($event->calendar_id);
            $allDay = $event->allDay;
            if ($recurrence) {
                for ($i = 0; $i < $recurrence['times']; $i++) {
                    $start->{$recurrence['function']}($recurrence['value']);
                    $end->{$recurrence['function']}($recurrence['value']);

                    switch ($start->dayOfWeek) {

                    case CarbonInterface::SATURDAY:
                        $start->addDays(2);
                        $end->addDays(2);
                        break;
                    case CarbonInterface::SUNDAY:
                        $start->addDays(1);
                        $end->addDays(1);
                        break;
                    default:
                        break;
                    }


                    $event->events()->create(
                        [                 // create child events of parent event
                        'title' => $event->title,
                        'start' => $start,
                        'user_id' => $event->user_id,
                        'author_id' => $event->author->id,
                        'editor_id' => $event->editor->id,
                        'end' => $end,
                        'allDay' => $allDay,
                        'calendar_id' => $event->calendar_id,
                        'recurrence' => $event->recurrence,
                        'borderColor' => $event->calendar->color,
                        'backgroundColor' => $event->calendar->color,
                        'extendedProps' => $event->extendedProps,
                        'images' => $event->images
                        ]
                    );
                }
            }

            $employees = $event->employees->pluck('id');

            foreach ($event->events as $item) {  // iterate childEvents and sync the mana-to-many-relationships accordingly

                $item->employees()->sync($employees);
                $item->save();
            }
        }

    }

    /**
     * Handle the Event "updated" event.
     */
    public function updated(Event $event): void
    {
        //
        //        if ($event->events()->exists() || $event->event) {
        //            $start = Carbon::parse($event->getOriginal('start'))->diffInRealSeconds($event->start, false);
        //            $end = Carbon::parse($event->getOriginal('end'))->diffInRealSeconds($event->end, false);
        //            if ($event->event)   // event is a childEvent so call all events with start bigger than this child
        //                $childEvents = $event->event->events()->whereDate('start', '>', $event->getOriginal('start'))->get();
        //            else
        //                $childEvents = $event->events;
        //
        //            foreach ($childEvents as $childEvent) {
        //                if ($start)
        //                    $childEvent->start = Carbon::parse($childEvent->start)->addSeconds($start)->format('Y-m-d H:i');
        //                if ($end)
        //                    $childEvent->end = Carbon::parse($childEvent->end)->addSeconds($end)->format('Y-m-d H:i');

        //                    switch (Carbon::parse($childEvent->start)->dayOfWeek) {
        //                        case CarbonInterface::SATURDAY:
        //                            $childEvent->start->addDays(2);
        //                            $childEvent->end->addDays(2);
        //                            break;
        //                        case CarbonInterface::SUNDAY:
        //                            $childEvent->start->addDays(1);
        //                            $childEvent->end->addDays(1);
        //                            break;
        //                        default:
        //                            break;
        //                    }


        //                if ($event->isDirty('title') && $childEvent->name == $event->getOriginal('title')) {
        //                    $childEvent->title = $event->title;
        //                }
        //                $childEvent->saveQuietly();
        //            }
        //        }

        //        $check = $event->wasChanged('recurrence');
        //        $dirty = $event->isDirty('recurrence');
        if ($event->isDirty('recurrence') && $event->recurrence != 'none') {
            //            self::deleted($event);
            self::created($event);
        }
    }

    /**
     * Handle the Event "deleted" event.
     */
    public function deleted(Event $event): void
    {
        //
        if ($event->events()->exists()) {
            $events = $event->events()->pluck('id');
        } else if ($event->event) {
            $events = $event->event->events()->whereDate('start', '>', $event->start)->pluck('id');
        } else {
            $events = [];
        }

        Event::whereIn('id', $events)->delete();
    }

    /**
     * Handle the Event "restored" event.
     */
    public function restored(Event $event): void
    {
        //
    }

    /**
     * Handle the Event "force deleted" event.
     */
    public function forceDeleted(Event $event): void
    {
        //
    }
}
