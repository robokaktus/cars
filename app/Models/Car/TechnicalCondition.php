<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechnicalCondition extends Model
{
    use HasFactory;

    protected $table = 'technical_conditions';

    protected $fillable = [
        'title',
        'slug',
        'short_title',
        'description',
        'icon'
    ];
}
