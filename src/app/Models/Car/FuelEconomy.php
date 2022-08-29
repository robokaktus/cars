<?php

namespace App\Models\Car;

use App\Models\Sale\Sale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelEconomy extends Model
{
    use HasFactory;

    protected $table = 'fuel_economies';

    protected $fillable = [
        'sale_id',
        'city_fuel_economy',
        'road_fuel_economy',
        'mix_fuel_economy'
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }
}
