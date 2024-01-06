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

    protected $fillable = [
                'uuid',
                'avatar',
                'color',
                'title1',
                'name1',
                'name2',
                'street',
                'country',
                'zip',
                'city',
                'phone1',
                'fax1',
                'phone2',
                'konto',
                'blz',
                'bank',
                'title2',
                'manager',
                'nfaellig',
                'skonto',
                'preisgrp',
                'role_id',
                'km',
                'email1',
                'www',
                'email',
                'dob',
                'datev',
                'uident',
                'iban',
                'bic',
                'banknr',
                'phone3',
                'phone4',
                'fax2',
                'name1',
                'email_verified_at',
                'password',
    ];

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

