<?php

namespace App\Models\Car;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Model extends \Illuminate\Database\Eloquent\Model
{
    use HasFactory;

    protected $table = 'models';

    protected $fillable = [
        'brand_id',
        'parent_id',
        'title',
        'slug'
    ];

    protected $dates = [
        'started_at',
        'ended_at'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }
}
