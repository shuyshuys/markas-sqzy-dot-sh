<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookingScheduleController;
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



Route::get('/event', function () {
    return view('event');
});



Route::controller(BookingScheduleController::class)->group(function () {
    Route::get('/booking/scheduling', 'pages');
    Route::get('/booking/checkout', 'checkout');
});

Route::resource('booking', BookingController::class);
