<?php

namespace App\Models\Paint;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paint extends Model
{
    use HasFactory;

    protected $table = 'paints';

    protected $fillable = [
        'title',
        'slug',
        'color_code'
    ];

}
