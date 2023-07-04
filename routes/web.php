<?php

use App\Http\Controllers\GuestController;
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

Route::match(['post', 'get'], '/power-quality/results', [HomeController::class, 'powerQuality'])
    ->name('output-power-quality');

Route::match(['post', 'get'], '/energy-conservation/results', [HomeController::class, 'energyConservation'])
    ->name('output-energy-conservation');

Route::match(['post', 'get'], '/chart', [HomeController::class, 'showUserData'])
    ->name('chart');
// Route::post('/energy-conservation/results', [HomeController::class, 'energyConservation'])
//     ->name('output-energy-conservation');




/*
|--------------------------------------------------------------------------
| VIEW FOR USER ACCOUNT INPUT ROUTES
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



/*
|--------------------------------------------------------------------------
| VIEW FOR GUEST USER INPUT ROUTES
|--------------------------------------------------------------------------
*/
Route::get('/welcome/guest', function () {
    return view('guest_homepage');
});


Route::get('/amperetrip/guest', function () {
    return view('guest_amperetrip');
});

Route::match(['post', 'get'], '/amperetrip/resultsguest', [GuestController::class, 'amperetrip']);




Route::get('/ampacity-of-conductors/guest', function () {
    return view('guest_ampacity');
});
Route::match(['post', 'get'], '/ampacity-of-conductors/resultsguest', [GuestController::class, 'ampacityConductors']);



Route::get('/percentage-of-voltage/guest', function () {
    return view('guest_voltagedrop');
});
Route::match(['post', 'get'], '/percentage-of-voltage/results/guest', [GuestController::class, 'percentageVoltage']);



Route::get('/power-quality/guest', function () {
    return view('guest_powerquality');
});
Route::match(['post', 'get'], '/power-quality/results/guest', [GuestController::class, 'powerQuality']);




Route::get('/energy-conservation/guest', function () {
    return view('guest_energyconservation');
});
Route::match(['post', 'get'], '/energy-conservation/results/guest', [GuestController::class, 'energyConservation']);
