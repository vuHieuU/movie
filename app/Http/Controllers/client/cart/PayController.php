<?php

namespace App\Http\Controllers\client\cart;

use App\Mail\BookTicket;
use App\Models\film;
use App\Models\food;
use App\Models\News;

use App\Jobs\SenMail;
use App\Models\combo;
use App\Models\ticket;
use App\Models\ShowTime;
use App\Models\ticketFood;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Models\showtime_seat;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function seatFood(Request $request ,$id)
     {
        $new_footer  = News::orderByDesc("created_at")->limit(2)->get();
         $film = film::findOrFail($id);
         $categories = $film->categories;
         $selectedDate = $request->input("selectedDate");
         $selectedHour = $request->input("selectedHour");
         $selectedShowTimeId = $request->input("selectedShowTimeId");
         session(['selectedDate' => $selectedDate]);
         session(['selectedHour' => $selectedHour]);
         session(['selectedShowTimeId' => $selectedShowTimeId]);
        
         $showTime = ShowTime::with('cinema','room')->findOrFail($selectedShowTimeId);

         $seats = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->get();
         
         $food = food::get();
         $combo = combo::get();
         $title = "Chairs_Food";
         return view('client.layout.cart.SeatFood',compact(
             'title','seats','food','combo','selectedDate','selectedHour','film','showTime','categories',"new_footer"
         ));

         
     }


    public function Pay(Request $request, $id)
    {
        $title = "Pay";
        $new_footer  = News::orderByDesc("created_at")->limit(2)->get();
        $tickit = ticket::find($id);
        $ShowTime = film::findOrFail($id);
        $selectedDate = session('selectedDate');
        $selectedHour = session('selectedHour');
        $selectedSeatsValue = $request->input("selectedSeatsValue");
        session(['selectedSeatsValue' => $selectedSeatsValue]);
        $selectedSeatsValueID = $request->input("selectedSeatsValueID");
        session(['selectedSeatsValueID' => $selectedSeatsValueID]);
        $cinemaName = $request->input("cinemaName");
        session(['cinemaName' => $cinemaName]);
        $cinemaRoom = $request->input("cinemaRoom");
        session(['cinemaRoom' => $cinemaRoom]);
        $selectedPriceSeatsValue = $request->input("selectedPriceSeatsValue");
        $totalPriceFoodValue = $request->input("totalPriceFoodValue");
        $foodData = $request->input("FoodValueName");
        $FoodValueName = json_decode($foodData, true);
        session(['FoodValueName' => $FoodValueName]);
        return view('client.layout.cart.pay',compact(
            "title",
            'ShowTime',
            'selectedDate',
            'selectedHour',
            'selectedSeatsValue',
            'selectedPriceSeatsValue',
            'totalPriceFoodValue',
            'FoodValueName',
            'cinemaName',
            "tickit",
            "new_footer"
        ));
    }

    public function PaymentSuccess(Request $request,$film_id)
    {               
    $selectedDate = session('selectedDate');
    $selectedHour = session('selectedHour');
    $selectedShowTimeId = session('selectedShowTimeId');
    $selectedSeatsValue = session('selectedSeatsValue');
    $selectedSeatsValueID = session('selectedSeatsValueID');
    $cinemaName = session('cinemaName');
    $cinemaRoom = session('cinemaRoom');
    $couponCode = session('coupon_code');
    $total = $request->input('total');
    session(['total' => $total]);
    $user = auth()->user();
    $FoodValueName = session('FoodValueName');
    $ShowTime = film::findOrFail($film_id);

    $ticket = new Ticket();
    $ticket->showtime_id = $selectedShowTimeId;
    $ticket->film_name = $ShowTime->name;
    $ticket->selected_date = $selectedDate;
    $ticket->selected_hour = $selectedHour;
    $ticket->selected_room = $cinemaRoom;
    $ticket->cinema = $cinemaName;
    $ticket->selected_seats = $selectedSeatsValue;
    $ticket->user_id = $user->id;
    $ticket->buyer_name = $user->name;
    $ticket->film_id = $ShowTime->id;
    $ticket->coupon_code = $couponCode;
    $ticket->total = $total;
    $ticket->code = date('Ymd-His') . rand(10, 99);
    
    $ticket->save();
    if($FoodValueName){
    foreach ($FoodValueName as $foodItem) {
        $ticketFood = new ticketFood();
        $ticketFood->ticket_id = $ticket->id;
        $ticketFood->name = $foodItem['name'];
        $ticketFood->quantity = $foodItem['quantity'];
        $ticketFood->save();
    }
    }
    $notification = new Notification();
    $notification->users_id = $user->id;
    $notification->tickets_id = $ticket->id;
    $notification->save();

    // SenMail::dispatch($user->email)->delay(now()->addSeconds(10));
    try {
        Mail::to($user->email)->send(new BookTicket($ticket));
    } catch (\Throwable $th) {
    }

    $selectSeatArray = explode(',', $selectedSeatsValueID);

    showtime_seat::where('showtime_id',$selectedShowTimeId)
               ->whereIn('seat_id',$selectSeatArray)
               ->update(['isActive' => 2]);
               session()->forget('applied_coupon');


    return redirect()->route('success',['film_id' => $ShowTime->id]);

    }

    public function show(Request $request,string $id)
    {
        if(isset($_GET['vnp_Amount'])){
            $selectedDate = session('selectedDate');
            $selectedHour = session('selectedHour');
            $selectedShowTimeId = session('selectedShowTimeId');
            $selectedSeatsValue = session('selectedSeatsValue');
            $selectedSeatsValueID = session('selectedSeatsValueID');
            $cinemaName = session('cinemaName');
            $cinemaRoom = session('cinemaRoom');
            $couponCode = session('coupon_code');
            $total = $_GET['vnp_Amount'] / 100;
            $FoodValueName = session('FoodValueName');
            $user = auth()->user();

            $ShowTime = film::findOrFail($id);
        
            $ticket = new Ticket();
            $ticket->showtime_id = $selectedShowTimeId;
            $ticket->film_name = $ShowTime->name;
            $ticket->selected_date = $selectedDate;
            $ticket->selected_hour = $selectedHour;
            $ticket->selected_room = $cinemaRoom;
            $ticket->cinema = $cinemaName;
            $ticket->selected_seats = $selectedSeatsValue;
            $ticket->user_id = $user->id;
            $ticket->buyer_name = $user->name;
            $ticket->film_id = $ShowTime->id;
            $ticket->coupon_code = $couponCode;
            $ticket->total = $total;
            $ticket->code = date('Ymd-His') . rand(10, 99);;
            $ticket->save();
            if($FoodValueName){
            foreach ($FoodValueName as $foodItem) {
                $ticketFood = new ticketFood();
                $ticketFood->ticket_id = $ticket->id;
                $ticketFood->name = $foodItem['name'];
                $ticketFood->quantity = $foodItem['quantity'];
                $ticketFood->save();
            }
            }

            $selectSeatArray = explode(',', $selectedSeatsValueID);
        
            showtime_seat::where('showtime_id',$selectedShowTimeId)
                       ->whereIn('seat_id',$selectSeatArray)
                       ->update(['isActive' => 2]);
                       session()->forget('applied_coupon');
        }
        $title = 'payment success';
        $ticket = ticket::latest()->first();
        $FoodValueName = session('FoodValueName');
        return view('client.layout.cart.PaymentSuccess',compact(
            'title',
            'ticket',
            'FoodValueName'
        ));
    }

}
