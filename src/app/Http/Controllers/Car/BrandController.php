<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car\Brand;
use App\Models\Car\Model;

class BrandController extends Controller
{
    public function loadModels(Brand $brand)
    {
         return $brand->models->map(fn(Model $model) => [
             'id' => $model->id,
             'title' => $model->title,
         ]);
    }
}
