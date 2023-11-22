<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingSceduleController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/home', 'index');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/event/reservation', function () {
    return view('reservation');
});

Route::controller(BookingSceduleController::class)->group(function () {
    Route::get('/booking/sceduling', 'index');
});

Route::resource('/booking', BookingController::class);
