<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Address extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function events(): MorphToMany
    {
        return $this->morphedByMany(Event::class, 'addressable');
    }

    public function users(): MorphToMany
    {
        return $this->morphedByMany(User::class, 'addressable');
    }


}
