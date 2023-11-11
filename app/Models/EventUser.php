<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EventUser extends Pivot
{
    protected $table = "event_user";


    protected $casts = [

        'start_at' => 'datetime:H:i',
        'end_at' => 'datetime:H:i'
    ];

    //    public function employee()
    //    {
    //        return $this->belongsTo(User::class);
    //    }
    //
    //    public function event()
    //    {
    //        return $this->belongsTo(Event::class);
    //    }

}
