<?php

namespace App\QueryFilters;

use Bizhub\QueryFilter\QueryFilter;

class SaleFilter extends QueryFilter
{
    public function brand(int $value)
    {
        $this->builder->whereRelation('brand', 'id', $value);
    }

    public function bodyType(int $value)
    {
        $this->builder->whereRelation('bodyType', 'id', $value);
    }
}
