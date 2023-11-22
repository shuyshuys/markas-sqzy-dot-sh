<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingScheduleController extends Controller
{

    public function pages()
    {
        return view('pages/booking/schedule');
    }
}
