<?php

namespace App\Models\Sale;

use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Paint\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'delivered_from_iso',
        'is_cleared_through_customs',
        'is_traded',
        'is_exchanged'
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
}
