<?php

namespace App\Models\Sale;

use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\Crash;
use App\Models\Car\Feature;
use App\Models\Car\FuelType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nnjeim\World\Models\City;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Sale extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    protected $table = 'sales';

    protected $fillable = [
        'brand_id',
        'model_id',
        'body_type_id',
        'price',
        'old_price',
        'version',
        'state_number',
        'is_hide_state_number',
        'vin_number',
        'is_hide_vin_number',
        'city_id',
        'phone_number',
        'telegram',
        'email',
        'manufactured_at',
        'engine_capacity',
        'horsepower',
        'mileage',
        'user_id'
    ];

    protected $casts = [
        'is_hide_state_number' => 'boolean',
        'is_hide_vin_number' => 'boolean'
    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo(\App\Models\Car\Model::class, 'model_id', 'id');
    }

    public function bodyType()
    {
        return $this->belongsTo(BodyType::class, 'body_type_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function preference()
    {
        return $this->hasOne(Preference::class, 'sale_id', 'id');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'feature_sale');
    }

    public function crash()
    {
        return $this->hasOne(Crash::class, 'sale_id', 'id');
    }

    public function fuelEconomy()
    {
        return $this->hasOne(FuelType::class, 'sale_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
