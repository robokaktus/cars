<?php

namespace App\Models\Paint;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    use HasFactory;

    protected $table = 'paint_conditions';

    protected $fillable = [
        'title',
        'slug',
        'short_title',
        'description',
        'icon'
    ];
}
