<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

class Event extends Model
{
    use HasFactory, SoftDeletes;



    protected $casts = [
        'extendedProps' => 'json',
        'images' => 'array'
    ];


    public
    function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public
    function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function calendar(): BelongsTo
    {
        return $this->belongsTo(Calendar::class);
    }
    /**
     * @return void
     * @param  mixed            $query
     * @param  array<int,mixed> $filters
     */
    public function scopeFilter($query, array $filters): void
    {
        $defaultCalendars = ['persönlich', 'Zaunbau', 'Stockfräsen', 'Gartenpflege', 'Böschungsmähen', 'Baumpflege', 'Winterdienst', 'Sonstiges'];
        $query->when(
            $filters['q'] ?? false, fn($query, $q) => $query
                ->where('title', 'like', '%' . $q . '%')
                ->orWhereHas(
                    'client', function ($query) use ($q) {
                    $query->where('fullName', 'LIKE', '%' . $q . '%');
                    }
                )
        );
        $terms = explode(',', $filters['calendars']);
        $query->when(
            $filters['calendars'] ?? false, fn($query, $q) => $query->where(
                function ($query) use ($terms) {
                foreach ($terms as $term) {
                    $query->orWhereJsonContains('extendedProps->calendar', $term);
                };
                }
            )
        );
    }
    /**
     * @param mixed $query
     * @param mixed $date
     */
    public
    function scopeStartsAfter($query, $date)
    {
        $dateis = Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
        return $query->where('start', '>=', $dateis);
        //        return $query->where('start', '>=', Carbon::parse($date)->format('Y-m-d'));
    }
    /**
     * @param mixed $date
     */
    public
    function scopeStartsBefore(Builder $query, $date): Builder
    {
        return $query->where('start', '<=', Carbon::parse($date));
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function editor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'editor_id');
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function employees(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id', )
            ->using(EventUser::class)
            ->withPivot(['start_at', 'end_at', 'sum']);

    }


    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function addresses():MorphToMany
    {
        return $this->morphToMany(Address::class, 'addressable');
    }



}
