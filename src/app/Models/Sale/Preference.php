<?php

namespace App\Models\Sale;

use App\Models\Car\DriveType;
use App\Models\Car\FuelType;
use App\Models\Car\GearboxType;
use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Paint\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nnjeim\World\Models\Country;

class Preference extends Model
{
    use HasFactory;

    protected $table = 'sale_preferences';

    protected $fillable = [
        'sale_id',
        'description',
        'paint_id',
        'paint_type_id',
        'paint_condition_id',
        'technical_condition_id',
        'fuel_type_id',
        'gearbox_type_id',
        'drive_type_id',
        'delivered_from_iso',
        'is_cleared_through_customs',
        'is_traded',
        'is_exchanged'
    ];

    protected $casts = [
        'is_cleared_through_customs' => 'boolean',
        'is_traded' => 'boolean',
        'is_exchanged' => 'boolean'
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class, 'sale_id', 'id');
    }

    public function paint()
    {
        return $this->belongsTo(Paint::class, 'paint_id', 'id');
    }

    public function paintType()
    {
        return $this->belongsTo(Type::class, 'paint_type_id', 'id');
    }

    public function paintCondition()
    {
        return $this->belongsTo(Condition::class, 'paint_condition_id', 'id');
    }

    public function technicalCondition()
    {
        return $this->belongsTo(TechnicalCondition::class, 'technical_condition_id', 'id');
    }

    public function fuelType()
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id', 'id');
    }

    public function gearboxType()
    {
        return $this->belongsTo(GearboxType::class, 'gearbox_type_id', 'id');
    }

    public function driveType()
    {
        return $this->belongsTo(DriveType::class, 'drive_type_id', 'id');
    }

    public function deliveredFrom()
    {
        return $this->belongsTo(Country::class, 'delivered_from_iso', 'iso2');
    }
}
