<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminS.index', [
            'approval' => Booking::where('approval', 0)->get()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('booking.form');
        return view('pages.booking.reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // var_dump($request);
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'company' => 'required',
            'event_type' => 'required',
            'event_name' => 'required',
            'description' => 'required'
        ]);

        $validate['approval'] = 0;
        // var_dump($validate);
        Booking::create($validate);
        return redirect('booking/checkout')->with('success','Pesan Tersampaikan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        $validate['approval'] = $request->input('approval');
        $id = $request->input('id');
        Booking::where('id',$id)->update($validate);

        return redirect('booking')->with('success','Berhasil Menyetujui.');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
