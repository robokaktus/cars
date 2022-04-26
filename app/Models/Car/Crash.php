<?php

namespace App\Models\Car;

use App\Models\Sale\Sale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crash extends Model
{
    use HasFactory;

    protected $table = 'crashes';

    protected $fillable = [
        'sale_id',
        'is_front_crash',
        'is_rear_crash',
        'is_top_crash',
        'is_left_crash',
        'is_right_crash',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }
}
