<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';

    protected $fillable = [
        'photograph',
        'city',
        'brand',
        'model',
        'description',
        'year',
        'milege',
        'typeofexchange',
        'storephone',
        'vehiclevalue',
    ];
}
