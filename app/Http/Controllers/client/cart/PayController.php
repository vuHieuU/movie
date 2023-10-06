<?php

namespace App\Http\Controllers\client\cart;

use App\Models\film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ticket;
use App\Models\showtime_seat;
class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request , $id)
    {
        $title = "Pay";
        $film = film::findOrFail($id);
        $film_name = $film->name;
        $duration = $film->duration;
        $selectedSeatsValue = $request->input('selectedSeatsValue');
        $selectedSeatsValue = session('selectedSeatsValue');
        $selectedPriceSeatsValue = $request->input('selectedPriceSeatsValue');
        $totalPriceFoodValue = $request->input('totalPriceFoodValue');
        $selectedSeatsValueID = $request->input('selectedSeatsValueID');
        $selectedDate = session('selectedDate');
        $selectedHour = session('selectedHour');
        $selectedSeatsValueID = session('selectedSeatsValueID');
        return view('client.layout.cart.pay',compact('title','selectedPriceSeatsValue','totalPriceFoodValue','film_name','duration','selectedDate','selectedHour','film','selectedSeatsValue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
