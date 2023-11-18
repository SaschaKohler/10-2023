<?php

namespace App\Observers;

use App\Models\Calendar;
use App\Models\Event;

class CalendarColorObserver
{
    /**
     * Handle the Calendar "created" event.
     */
    public function created(Calendar $calendar): void
    {
        //
    }

    /**
     * Handle the Calendar "updated" event.
     */
    public function updated(Calendar $calendar): void
    {
        //
        if ($calendar->isDirty('color')) {
            $events = Event::query()->where('calendar_id', '=', $calendar->id)->get();
            foreach ($events as $event)
            {
                $event->backgroundColor = $calendar->color;
                $event->borderColor = $calendar->color;

                $event->update();

            }
        }
    }

    /**
     * Handle the Calendar "deleted" event.
     */
    public function deleted(Calendar $calendar): void
    {
        //
    }

    /**
     * Handle the Calendar "restored" event.
     */
    public function restored(Calendar $calendar): void
    {
        //
    }

    /**
     * Handle the Calendar "force deleted" event.
     */
    public function forceDeleted(Calendar $calendar): void
    {
        //
    }
}
