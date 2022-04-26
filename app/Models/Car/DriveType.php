<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriveType extends Model
{
    use HasFactory;

    protected $table = 'delivery_types';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon'
    ];
}
