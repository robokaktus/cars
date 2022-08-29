<?php

namespace App\Http\Controllers\Sale;

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

class PreferencesController extends Controller
{
    public function index(Sale $sale): Response
    {
       return self::renderInertia($sale->id);
    }

    public function store(Sale $sale, StorePreferencesRequest $storePreferencesRequest): Response
    {
       $sale->preference()->create($storePreferencesRequest->validated());

       return GalleryController::renderInertia($sale->id);
    }

    public static function renderInertia(int $saleId): Response
    {
        return Inertia::render('Car/Sale/Preferences', [
            'paints' => Paint::get(['id', 'title', 'color_code']),
            'paintTypes' => Type::get(['id', 'title', 'short_title', 'description', 'icon']),
            'paintConditions' => Condition::get(['id', 'title', 'short_title', 'description', 'icon']),
            'technicalConditions' => TechnicalCondition::get(['id', 'title', 'short_title', 'description', 'icon']),
            'fuelTypes' => FuelType::get(['id', 'title', 'description', 'icon']),
            'gearboxTypes' => GearboxType::get(['id', 'title', 'description', 'icon']),
            'driveTypes' => DriveType::get(['id', 'title', 'description', 'icon']),
            'countries' => Country::get('iso2', 'name'),
            'saleId' => $saleId
        ]);
    }
}
