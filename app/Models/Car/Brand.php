<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'title',
        'slug',
        'foundation_year',
        'country_iso',
        'logo'
    ];

    public function models()
    {
        return $this->hasMany(\App\Models\Car\Model::class, 'brand_id', 'id');
    }
}
