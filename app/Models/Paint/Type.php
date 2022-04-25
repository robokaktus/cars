<?php

namespace App\Models\Paint;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'paint_types';

    protected $fillable = [
        'title',
        'slug',
        'short_title',
        'description',
        'icon'
    ];
}
