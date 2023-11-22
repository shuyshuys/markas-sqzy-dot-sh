<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingSceduleController extends Controller
{

    public function index()
    {
        return view('pages.booking.scedule');
    }
}
