<?php

namespace App\Http\Controllers\client\cart;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\combo;
use App\Models\combo_food;
use App\Models\food;
use App\Models\seats;
use App\Models\ShowTime;
use App\Models\showtime_seat;
use Illuminate\Http\Request;

class Chairs_FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $selectedDate = $request->input("selectedDate");
        $selectedHour = $request->input("selectedHour");
        $selectedShowTimeId = $request->input("selectedShowTimeId");
        // $seats_id = showtime_seat::where('seat_id',$selectedShowTimeId)->get();
        $showTime = ShowTime::findOrFail($selectedShowTimeId);
        $seats = DB::table('showtime_seats')
        ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
        ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
        ->where('showtime_seats.showtime_id', $selectedShowTimeId)
        ->select('seats.*','typeseats.price')
        ->get();
        // dd($seats);


        $food = food::get();
        $combo = combo::get();
        $title = "Chairs_Food";
        return view('client.layout.cart.chairs_food',compact('title','seats','food','combo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
