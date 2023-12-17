<?php

namespace App\Models;

use App\Enum\InsuranceTypeEnum;
use App\Enum\VehicleTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory,SoftDeletes;



    protected $guarded = ['id'];

    protected $casts = [
        'type' => VehicleTypeEnum::class,
        'insurance_type' => InsuranceTypeEnum::class,
    ];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class);
    }
}
