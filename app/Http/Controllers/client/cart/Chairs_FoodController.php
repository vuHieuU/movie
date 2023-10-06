<?php

namespace App\Http\Controllers\client\cart;
use App\Models\film;
use App\Models\food;
use App\Models\combo;
use App\Models\seats;
use App\Models\ShowTime;
use App\Models\combo_food;
use Illuminate\Http\Request;
use App\Models\showtime_seat;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class Chairs_FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request ,$id)
    {
        $film = film::findOrFail($id);
        $selectedDate = $request->input("selectedDate");
        $selectedHour = $request->input("selectedHour");
        $selectedShowTimeId = $request->input("selectedShowTimeId");
        session(['selectedDate' => $selectedDate]);
        session(['selectedHour' => $selectedHour]);
        session(['selectedShowTimeId' => $selectedShowTimeId]);
       
        $showTime = ShowTime::findOrFail($selectedShowTimeId);
        $seats = DB::table('showtime_seats')
        ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
        ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
        ->where('showtime_seats.showtime_id', $selectedShowTimeId)
        ->select('seats.*','typeseats.price','showtime_seats.isActive')
        ->get();
        $food = food::get();
        $combo = combo::get();
        $title = "Chairs_Food";
        return view('client.layout.cart.chairs_food',compact(
            'title','seats','food','combo','selectedDate','selectedHour','film'
        ));
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
