<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GearboxType extends Model
{
    use HasFactory;

    protected $table = 'gearbox_types';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon'
    ];
}
