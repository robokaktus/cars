<?php

namespace App\Http\Controllers\SaleForm;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\StorePreferencesRequest;
use App\Models\Car\DriveType;
use App\Models\Car\FuelType;
use App\Models\Car\GearboxType;
use App\Models\Car\TechnicalCondition;
use App\Models\Paint\Condition;
use App\Models\Paint\Paint;
use App\Models\Paint\Type;
use App\Models\Sale\Sale;
use Inertia\Inertia;
use Inertia\Response;
use Nnjeim\World\Models\Country;

class FeaturesController extends Controller
{
    public function index(Sale $sale): Response
    {
       return self::renderInertia($sale->id);
    }

    public function store(Sale $sale): Response
    {
       dd(222);
    }

    public static function renderInertia(int $saleId): Response
    {
        return Inertia::render('Car/SaleForm/Features', [
            'saleId' => $saleId
        ]);
    }
}
