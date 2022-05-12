<?php

use App\Http\Controllers\Sale\Main;
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

Route::get('/car/sell', [Main::class, 'index']);
Route::post('/car/sell', [Main::class, 'store']);

Route::get('/car/sell-2', function () {
    return Inertia::render('Car/Sell/Sell-2');
});
Route::get('/car/sell-3', function () {
    return Inertia::render('Car/Sell/Sell-3');
});
Route::get('/car/sell-4', function () {
    return Inertia::render('Car/Sell/Sell-4');
});
Route::get('/car/sell-5', function () {
    return Inertia::render('Car/Sell/Sell-5');
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
