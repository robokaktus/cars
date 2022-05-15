<?php

use App\Http\Controllers\Sale\MainController;
use App\Http\Controllers\Sale\PreferencesController;
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
});

Route::get('/car/sale', [MainController::class, 'index']);
Route::post('/car/sale', [MainController::class, 'store']);

Route::get('/car/sale/{sale}/preferences', [PreferencesController::class, 'index'])->name('car.sale-sale.preferences');
Route::post('/car/sale/{sale}/preferences', [PreferencesController::class, 'store']);

Route::get('/car/sale/{sale}/gallery', [PreferencesController::class, 'index'])->name('car.sale-sale.gallery');
Route::post('/car/sale/{sale}/gallery', [PreferencesController::class, 'store']);

Route::get('/car/sale/{sale}/crash', [PreferencesController::class, 'index'])->name('car.sale-sale.crash');
Route::post('/car/sale/{sale}/crash', [PreferencesController::class, 'store']);

Route::get('/car/sale/{sale}/features', [PreferencesController::class, 'index'])->name('car.sale-sale.features');
Route::post('/car/sale/{sale}/features', [PreferencesController::class, 'store']);

Route::get('/car/features', function () {
    return Inertia::render('Car/Sale/Features');
});

Route::get('/car/catalog', function () {
    return Inertia::render('Car/Catalog');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
