<?php

namespace App\Http\Controllers\client\cart;

use Carbon\Carbon;
use App\Models\film;
use App\Models\food;
use App\Models\News;
use App\Jobs\SenMail;
use App\Models\combo;

use App\Models\coupon;
use App\Models\ticket;
use App\Mail\BookTicket;
use App\Models\ShowTime;
use App\Models\ticketFood;
use App\Models\coupon_usage;
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

         $seats1 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(0)->limit(12)->get();
         $seats2 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(12)->limit(10)->get();
         $seats3 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(22)->limit(12)->get();
         $seats4 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(34)->limit(10)->get();
         $seats5 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(44)->limit(12)->get();
         $seats6 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(56)->limit(10)->get();
         $seats7 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(66)->limit(12)->get();
         $seats8 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(78)->limit(12)->get();
         $f1 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(0)->limit(9)->get();
         $f2 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(9)->limit(8)->get();
         $f3 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(17)->limit(9)->get();
         $f4 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(26)->limit(9)->get();
         $f5 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(35)->limit(8)->get();
         $f6 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(43)->limit(8)->get();
         $f7 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(51)->limit(9)->get();
         $f8 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(60)->limit(9)->get();
         $count = DB::table("showtime_seats")->where("showtime_id",$selectedShowTimeId)->count();
         $food = food::get();
         $combo = combo::get();
         $title = "Chairs_Food";
         return view('client.layout.cart.SeatFood',compact(
             'title','seats1','seats2','seats3','seats4','seats5','seats6','seats7','seats8','f1','f2','f3','f4','f5','f6','f7','f8','food','combo','selectedDate','selectedShowTimeId','selectedHour','film','showTime','categories',"new_footer","count"
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
        $couponIds = Coupon::get()->pluck('id')->toArray();
        $is_used = coupon_usage::where('user_id', auth()->user()->id)
                    ->whereIn('coupon_id', $couponIds)
                    ->get()->pluck('coupon_id')->toArray();
        $not_useds = Coupon::where('expiry_date', '>=', Carbon::now())
                    ->orderBy('created_at','desc')
                    ->whereNotIn('id', $is_used)
                    ->get();
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
            "new_footer",
            "not_useds"
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
    $payment = $request->input('payment');
    session(['payment' => $payment]);
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
    $ticket->payment = $payment;
    $ticket->code = date('Ymd-His') . rand(10, 99);
    
    $ticket->save();
    if($FoodValueName){
    foreach ($FoodValueName as $foodItem) {
        $ticketFood = new ticketFood();
        $ticketFood->ticket_id = $ticket->id;
        $ticketFood->name = $foodItem['name'];
        $ticketFood->quantity = $foodItem['quantity'];
        $ticketFood->save();
        $food = food::where('id', $foodItem['id'])->first();

        if ($food) {
            $newQty = $food->qty - $foodItem['quantity'];
            $food->qty = $newQty;
            $food->save();
        }

    }
    }

    if ($couponCode) {
        $coupon = Coupon::where('name', $couponCode)->first();
        if ($coupon) {
            $coupon_usage = new coupon_usage;
            $coupon_usage->user_id = $user->id;
            $coupon_usage->coupon_id = $coupon->id;
            $coupon_usage->save();
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
            $ticket->payment = "VNPAY";
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
                $food = food::where('id', $foodItem['id'])->first();

                if ($food) {
                    $newQty = $food->qty - $foodItem['quantity'];
                    $food->qty = $newQty;
                    $food->save();
                }
            }
            }

            if ($couponCode) {
                $coupon = Coupon::where('name', $couponCode)->first();
                if ($coupon) {
                    $coupon_usage = new coupon_usage;
                    $coupon_usage->user_id = $user->id;
                    $coupon_usage->coupon_id = $coupon->id;
                    $coupon_usage->save();
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
                $queryParams = $request->except('vnp_Amount');
                $newUrl = route('success', ['film_id' => $ShowTime->id], $queryParams);
                return redirect($newUrl);
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
