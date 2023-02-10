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

class SalesController extends Controller
{
    public function index()
    {
        return Inertia::render('Car/Sales/Main', [
            'sales' => $this->getSales(),
            'brands' => Brand::all(),
            'models' => Model::all(),
            'regions' => State::all(),
            'cities' => City::all(),
            'body_types' => BodyType::all(),
            'paints' => Paint::all(),
            'paint_types' => Type::all(),
            'paint_conditions' => Condition::all(),
            'technical_conditions' => TechnicalCondition::all(),
            'fuel_types' => FuelType::all(),
            'gearbox_types' => GearboxType::all(),
            'drive_type' => DriveType::all(),
            'countries' => Country::all()
        ]);
    }

    private function getSales()
    {
        return Sale::with([
            'brand',
            'model',
            'bodyType',
            'city',
            'user',
            'preference',
            'preference.paint',
            'preference.paintType',
            'preference.paintCondition',
            'preference.technicalCondition',
            'preference.fuelType',
            'preference.gearboxType',
            'preference.driveType',
            'preference.deliveredFrom'
        ])->filter()->paginate(12);
//            ->through(fn(Sale $sale) => [
//            'price' => $sale->price,
//            'old_price' => $sale->old_price,
//            'manufactured_at' => $sale->manufactured_at,
//            'state_number' => $sale->state_number,
//            'is_hide_state_number' => $sale->is_hide_state_number,
//            'vin_number' => $sale->vin_number,
//            'is_hide_vin_number' => $sale->is_hide_vin_number,
//            'engine_capacity' => $sale->engine_capacity,
//            'horsepower' => $sale->horsepower,
//            'mileage' => $sale->mileage,
//            'phone_number' => $sale->phone_number,
//            'telegram' => $sale->telegram,
//            'email' => $sale->email,
//            'brand' => [
//                'title' => $sale->brand->title
//            ],
//            'model' => [
//                'title' => $sale->model->title
//            ],
//            'body_type' => [
//                'title' => $sale->bodyType->title,
//                'description' => $sale->bodyType->description,
//                'icon' => $sale->bodyType->icon,
//            ],
//            'city' => $sale->city->name,
//            'user' => $sale->user->name,
//            'description' => $sale->preference->description,
//            'paint' => [
//                'title' => $sale->preference->paint->title,
//                'color_code' => $sale->preference->paint->color_code,
//            ],
//            'paint_type' => [
//                'title' => $sale->preference->paintType->title,
//                'description' => $sale->preference->paintType->description,
//                'icon' => $sale->preference->paintType->icon,
//            ],
//            'paint_condition' => [
//                'title' => $sale->preference->paintCondition->title,
//                'description' => $sale->preference->paintCondition->description,
//                'icon' => $sale->preference->paintCondition->icon,
//            ],
//            'technical_condition' => [
//                'title' => $sale->preference->technicalCondition->title,
//                'description' => $sale->preference->technicalCondition->description,
//                'icon' => $sale->preference->technicalCondition->icon,
//            ],
//            'fuel_type' => [
//                'title' => $sale->preference->fuelType->title,
//                'description' => $sale->preference->fuelType->description,
//                'icon' => $sale->preference->fuelType->icon,
//            ],
//            'gearbox_type' => [
//                'title' => $sale->preference->gearboxType->title,
//                'description' => $sale->preference->gearboxType->description,
//                'icon' => $sale->preference->gearboxType->icon,
//            ],
//            'drive_type' => [
//                'title' => $sale->preference->DriveType->title,
//                'description' => $sale->preference->DriveType->description,
//                'icon' => $sale->preference->DriveType->icon,
//            ],
//            'delivered_from' => $sale->preference->deliveredFrom?->name,
//            'is_cleared_through_customs' => $sale->preference->is_cleared_through_customs,
//            'is_traded' => $sale->preference->is_traded,
//            'is_exchanged' => $sale->preference->is_exchanged,
//        ]);
    }
}
