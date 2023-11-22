<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingScheduleController extends Controller
{

    public function pages()
    {
        return view('pages/booking/schedule');
    }

    public function checkout(){
        return view('pages/booking/checkout');
    }

}
