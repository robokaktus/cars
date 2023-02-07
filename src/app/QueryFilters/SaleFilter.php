<?php

namespace App\QueryFilters;

use Bizhub\QueryFilter\QueryFilter;
use Illuminate\Database\Query\Builder;

class SaleFilter extends QueryFilter
{
    public function brand(int $value)
    {
        $this->builder->whereRelation('brand', 'id', $value);
    }

    public function models(array $value)
    {
        $this->builder->whereRelation('model', 'id', 'in', $value);
    }

    public function regions(array $value)
    {
        $this->builder->whereRelation('region', 'id', 'in', $value);
    }

    public function cities(array $value)
    {
        $this->builder->whereRelation('city', 'id', 'in', $value);
    }

    public function bodyTypes(array $value)
    {
        $this->builder->whereRelation('bodyType', 'id', 'in', $value);
    }

    public function features(array $value)
    {
        $this->builder->whereRelation('features', 'id', 'in', $value);
    }

    public function crash(int $value)
    {
        $this->builder->when($value === 0, function (\Illuminate\Database\Eloquent\Builder $query) {
            return $query->whereHas('crash');
        }, function (\Illuminate\Database\Eloquent\Builder $query) {
            return $query->whereDoesntHave('crash');
        });
    }

    public function driveTypes(array $value)
    {
        $this->builder->whereHas('preference', function (Builder $query) use ($value) {
            return $query->whereIn('drive_type_id', $value);
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

    public function price(array $value)
    {
        if (isset($value['min'])) {
            $this->builder->where('price', '>=', $value['min']);
        }
        if (isset($value['max'])) {
            $this->builder->where('price', '<=', $value['max']);
        }
    }

    public function manufacturedAt(array $value)
    {
        if (isset($value['min'])) {
            $this->builder->whereDate('manufactured_at', '>=', $value['min']);
        }
        if (isset($value['max'])) {
            $this->builder->whereDate('manufactured_at', '<=', $value['max']);
        }
    }
}
