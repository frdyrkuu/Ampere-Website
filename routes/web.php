<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| AUTHENTICATED FUNCTIONS FOR CONTROLLERS ROUTES
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::match(['post', 'get'], '/amperetrip/results', [HomeController::class, 'amperetrip'])
      ->name('output-amperetrip');

Route::match(['post', 'get'], '/ampacity-of-conductors/results', [HomeController::class, 'ampacityConductors'])
    ->name('output-ampacity-conductors');

Route::match(['post', 'get'], '/percentage-of-voltage/results', [HomeController::class, 'percentageVoltage'])
    ->name('output-voltage-drop');

// Route::get('', [App\Http\Controllers\HomeController::class, 'powerQuality'])->name('powerQuality');
// Route::get('', [App\Http\Controllers\HomeController::class, 'energyConservation'])->name('energyConservation');



/*
|--------------------------------------------------------------------------
| VIEW FOR USER INPUT ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/amperetrip', function () {
    return view('amperetrip');
})->middleware('auth');

Route::get('/ampacity-of-conductors', function () {
    return view('ampacity-conductors');
})->middleware('auth');

Route::get('/percentage-of-voltage', function () {
    return view('percentage-of-voltage');
})->middleware('auth');

Route::get('/power-quality', function () {
    return view('power-quality');
})->middleware('auth');

Route::get('/energy-conservation', function () {
    return view('energy-conservation');
})->middleware('auth');
