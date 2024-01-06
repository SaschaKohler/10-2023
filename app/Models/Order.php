<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
                'user_id',
                'event_id',
                'number',
                'total_price',
                'discount',
                'status',
                'notes',
    ];

    protected $guarded = [
        'id'
    ];

    //    public function event(): BelongsTo
    //    {
    //        return $this->belongsTo(Event::class, 'event_id');
    //    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }


}
