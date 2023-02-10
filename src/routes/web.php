<?php

use App\Http\Controllers\SaleForm\CrashController;
use App\Http\Controllers\SaleForm\FeaturesController;
use App\Http\Controllers\SaleForm\GalleryController;
use App\Http\Controllers\SaleForm\MainController;
use App\Http\Controllers\SaleForm\PreferencesController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');



Route::get('/car/features', function () {
    return Inertia::render('Car/Sale/Features');
});

Route::get('/car/sales', [\App\Http\Controllers\Car\SalesController::class, 'index'])->name('car.sales');
Route::get('/car/sales/{sale}', [\App\Http\Controllers\Car\SaleController::class, 'index'])->name('car.sale');
Route::post('/brands/{brand}/load-models', [\App\Http\Controllers\Car\BrandController::class, 'loadModels']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/car/sale', [MainController::class, 'index'])->name('car.sale-form');
    Route::post('/car/sale', [MainController::class, 'store']);

    Route::get('/car/sale/{sale}/preferences', [PreferencesController::class, 'index'])->name('car.sale-form.preferences');
    Route::post('/car/sale/{sale}/preferences', [PreferencesController::class, 'store']);

    Route::get('/car/sale/{sale}/gallery', [GalleryController::class, 'index'])->name('car.sale-form.gallery');
    Route::post('/car/sale/{sale}/gallery', [GalleryController::class, 'store']);

    Route::get('/car/sale/{sale}/crash', [CrashController::class, 'index'])->name('car.sale-form.crash');
    Route::post('/car/sale/{sale}/crash', [CrashController::class, 'store']);

    Route::get('/car/sale/{sale}/features', [FeaturesController::class, 'index'])->name('car.sale-form.features');
    Route::post('/car/sale/{sale}/features', [FeaturesController::class, 'store']);
});
