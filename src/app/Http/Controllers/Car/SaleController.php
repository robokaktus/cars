<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\DriveType;
use App\Models\Car\FuelType;
use App\Models\Car\GearboxType;
use App\Models\Car\Model;
use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Paint\Type;
use App\Models\Sale\Sale;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Nnjeim\World\Models\City;
use Nnjeim\World\Models\Country;
use Nnjeim\World\Models\State;

class SaleController extends Controller
{
    public function index(Sale $sale)
    {
        return Inertia::render('Car/Sale/Main', [
            'sale' => $sale,
        ]);
    }
}
