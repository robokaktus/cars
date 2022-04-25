<?php

namespace App\Models\Sale;

use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\Feature;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
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
        'vin_number',
        'city_id',
        'phone_number',
        'user_id'
    ];

    protected $dates = [
        'manufactured_at'
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
}
