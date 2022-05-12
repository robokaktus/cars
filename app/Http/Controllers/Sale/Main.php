<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Http\Requests\Sale\StoreSaleRequest;
use App\Models\Car\BodyType;
use App\Models\Car\Brand;
use App\Models\Car\Model;
use Inertia\Inertia;
use Nnjeim\World\Models\Country;

class Main extends Controller
{
    public function store(StoreSaleRequest $storeSellRequest)
    {
        $sale = auth()->user()->sales()->create($storeSellRequest->validated());

        return Inertia::render('Car/Sell/Sell-2');
    }

    public function index()
    {
        $ukraine = Country::where('iso2', 'UA')->first();

        return Inertia::render('Car/Sell/Main', [
            'brands' => Brand::orderBy('priority')->get(['id', 'title']),
            'models' => Model::get(['id', 'title']),
            'bodyTypes' => BodyType::get(['id', 'title', 'icon']),
            'years' => range(now()->year, 1960),
//            'cities' => $ukraine->cities
        ]);
    }
}
