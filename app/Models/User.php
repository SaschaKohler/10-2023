<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser, HasName
{
    use HasFactory,  HasApiTokens, SoftDeletes, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //    protected $fillable = [
    //        'name',
    //        'email',
    //        'password',
    //    ];
    //

    protected $guarded = [
        'id'
    ];




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'dob' => 'date:d.m.Y',
    ];


    // public function info(): HasOne
    // {
    //     return $this->hasOne(Info::class);//->withDefault();
    // }
    //

    public function getFilamentName(): string
    {
        return "{$this->name1}";
    }


    public function isAdmin()
    {
        return $this->role_id == 1;
    }


    // public function tasks(): HasMany
    // {
    //     return $this->hasMany(Todo::class);
    // }


    public function events() : BelongsToMany
    {
        return $this->belongsToMany(Event::class)
            ->using(EventUser::class)
            ->withPivot(['id','start_at','end_at','sum']);
    }

    public function addresses() : MorphToMany
    {
        return $this->morphToMany(Address::class, 'addressable');
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // TODO: Implement canAccessFilament() method.

        return true;
    }
    /**
     * @param mixed $argument0
     */
}

