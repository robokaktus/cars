<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelType extends Model
{
    use HasFactory;

    protected $table = 'fuel_types';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon'
    ];
}
