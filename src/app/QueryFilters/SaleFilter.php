<?php

namespace App\QueryFilters;

use Bizhub\QueryFilter\QueryFilter;
use Illuminate\Database\Eloquent\Builder;

class SaleFilter extends QueryFilter
{
    public function brand(int $value)
    {
        $this->builder->whereRelation('brand', 'id', $value);
    }

    public function models(array $value)
    {
        $this->builder->whereHas('model', function (Builder $query) use ($value) {
            $query->whereIn('models.id', $value);
        });
    }

    public function regions(array $value)
    {
        $this->builder->whereHas('region', function (Builder $query) use ($value) {
            $query->whereIn('states.id', $value);
        });
    }

    public function cities(array $value)
    {
        $this->builder->whereHas('city', function (Builder $query) use ($value) {
            $query->whereIn('cities.id', $value);
        });
    }

    public function bodyTypes(array $value)
    {
        $this->builder->whereHas('bodyType', function (Builder $query) use ($value) {
            $query->whereIn('body_types.id', $value);
        });
    }


    public function driveTypes(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('drive_type_id', $value);
        });
    }

    public function fuelTypes(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('fuel_type_id', $value);
        });
    }

    public function gearboxTypes(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('gearbox_type_id', $value);
        });
    }

    public function features(array $value)
    {
        $this->builder->whereHas('features', function (Builder $query) use ($value) {
            return $query->whereIn('features.id', $value);
        });
    }

    public function paints(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('paint_id', $value);
        });
    }

    public function paintTypes(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('paint_type_id', $value);
        });
    }

    public function technicalConditions(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('technical_condition_id', $value);
        });
    }

    public function clearedThroughCustoms(int $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->where('is_cleared_through_customs', $value);
        });
    }

    public function traded(int $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->where('is_traded', $value);
        });
    }

    public function exchanged(int $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->where('is_exchanged', $value);
        });
    }

    public function crashed(int $value)
    {
        $this->builder->when($value === 0, function (Builder $query) {
            return $query->whereHas('crash');
        }, function (Builder $query) {
            return $query->whereDoesntHave('crash');
        });
    }

    public function price(array $value)
    {
        if (isset($value[0])) {
            $this->builder->where('price', '>=', $value[0]);
        }
        if (isset($value[1])) {
            $this->builder->where('price', '<=', $value[1]);
        }
    }

    public function mileage(array $value)
    {
        if (isset($value[0])) {
            $this->builder->where('mileage', '>=', $value[0]);
        }
        if (isset($value[1])) {
            $this->builder->where('mileage', '<=', $value[1]);
        }
    }

    public function engineCapacity(array $value)
    {
        if (isset($value[0])) {
            $this->builder->where('engine_capacity', '>=', $value[0]);
        }
        if (isset($value[1])) {
            $this->builder->where('engine_capacity', '<=', $value[1]);
        }
    }

    public function manufacturedAtBegin(int $value)
    {
            $this->builder->where('manufactured_at', '>=', $value);
    }

    public function manufacturedAtEnd(int $value)
    {
            $this->builder->where('manufactured_at', '<=', $value);
    }
}
