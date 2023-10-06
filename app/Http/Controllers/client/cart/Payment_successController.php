<?php

namespace App\Http\Controllers\client\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\film;
use App\Models\ticket;
use App\Models\showtime_seat;

class Payment_successController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $film_id )
    {
   
    $selectedDate = session('selectedDate');
    $selectedHour = session('selectedHour');
    $selectedSeatsValue = session('selectedSeatsValue');
    $selectedSeatsValueID = session('selectedSeatsValueID');
    $selectedShowTimeId = session('selectedShowTimeId');
    $total = $request->input('total');

    // Lấy thông tin người đăng nhập
    $user = auth()->user();
    $film = Film::findOrFail($film_id);

    $data = [
        'film_name' => $film->name,
        'selected_date' => $selectedDate,
        'selected_hour' => $selectedHour,
        'selected_room' => 'Room1',
        'selected_seats' => $selectedSeatsValue,
        'user_id' => $user->id,
        'buyer_name' => $user->name,
        'film_id' => $film_id,
        'total' => $total,
    ];
        ticket::create($data);

        $selectSeatArray = explode(',', $selectedSeatsValueID);

        showtime_seat::where('showtime_id',$selectedShowTimeId)
                   ->whereIn('seat_id',$selectSeatArray)
                   ->update(['isActive' => 2]);

    return redirect()->route('payment_success',[$film->id]); 

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = 'payment success';
        $ticket = ticket::findOrFail($id);
        return view('client.layout.cart.Payment_success',compact('title','ticket'));
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
