<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;


    protected $guarded = ['id'];


    protected $fillable = [
        'uuid',
        'matnr',
        'search',
        'short_text',
        'unit',
        'lpr',
        'ek',
        'vk1',
        'vk1_perc',
        'vk2',
        'vk2_perc',
        'vk3',
        'vk3_perc',
    ];

    protected function lpr(): Attribute
    {
        return Attribute::make(
            // get: fn($value) => str_replace('.', ',', $value),
            set: fn($value) => str_replace(',', '.', $value)
            //            get: fn($value) => $value * 100,
            //            set: fn($value) => str_replace(',', '.', $value)
        );
    }

    protected function ek(): Attribute
    {
        return Attribute::make(
            // get: fn($value) => str_replace('.', ',', $value),
            set: fn($value) => str_replace(',', '.', $value)
            // get: fn($value) => str_replace('.', ',', $value),
            //            set: fn($value) => trim($value, ',')
        );
    }

    protected function vk1(): Attribute
    {
        return Attribute::make(
            // get: fn($value) => str_replace('.', ',', $value),
            set: fn($value) => str_replace(',', '.', $value)
            //            get: fn($value) => str_replace('.', ',', $value),
            //            set: fn($value) => str_replace(',', '.', $value)
            //            set: fn($value) => trim($value, ',')
        );
    }


    protected function vk2(): Attribute
    {
        return Attribute::make(
            // get: fn($value) => str_replace('.', ',', $value),
            set: fn($value) => str_replace(',', '.', $value)
            //            get: fn($value) => $value * 100,
            //            get: fn($value) => str_replace('.', ',', $value),
            //            set: fn($value) => str_replace(',', '.', $value)
        );
    }

    protected function vk3(): Attribute
    {
        return Attribute::make(
            // get: fn($value) => str_replace('.', ',', $value),
            set: fn($value) => str_replace(',', '.', $value)
            //            get: fn($value) => str_replace('.', ',', $value),
            //            set: fn($value) => str_replace(',', '.', $value)
            //     set: fn($value) => trim($value, ',')
        );
    }

}
