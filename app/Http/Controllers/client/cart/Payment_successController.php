<?php

namespace App\Http\Controllers\client\cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ticket;
use App\Models\showtime_seat;
use App\Models\film;

class Payment_successController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,$film_id)
    {
               // Lấy thông tin đơn hàng từ request
    $selectedDate = session('selectedDate');
    $selectedHour = session('selectedHour');
    $selectedShowTimeId = session('selectedShowTimeId');
    $selectedSeatsValue = session('selectedSeatsValue');
    $selectedSeatsValueID = session('selectedSeatsValueID');
    $total = $request->input('total');
    
    // Lấy thông tin người đăng nhập
    $user = auth()->user();

    // Lấy thông tin bộ phim từ biến $film
    $film = Film::findOrFail($film_id);

    // Tạo bản ghi Ticket và lưu vào cơ sở dữ liệu
    $ticket = new Ticket();
    $ticket->film_name = $film->name;
    $ticket->selected_date = $selectedDate;
    $ticket->selected_hour = $selectedHour;
    $ticket->selected_room = 'Room1';
    $ticket->selected_seats = $selectedSeatsValue;
    $ticket->user_id = $user->id;
    $ticket->buyer_name = $user->name;
    $ticket->film_id = $film_id;
    $ticket->total = $total;

    $ticket->save();
    // dd($ticket);

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
    public function show(string $film_id)
    {
        $title = 'payment success';
        return view('client.layout.cart.Payment_success',compact('title'));
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
