<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyType extends Model
{
    use HasFactory;

    protected $table = 'body_types';

    protected $fillable = [
        'title',
        'slug',
        'description',
        'icon'
    ];
}
