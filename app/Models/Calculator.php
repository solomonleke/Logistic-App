<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    use HasFactory;
    protected $fillable = [
        'KM_price',
        'KG_price',
        'air_fright',
        'road_fright',
        'ocean_fright'
       
    ];
}
