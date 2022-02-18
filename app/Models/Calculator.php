<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    use HasFactory;
    protected $fillable = [
        'KM-price',
        'KG-price',
        'air_fright',
        'road_fright',
        'ocean_fright'
       
    ];
}
