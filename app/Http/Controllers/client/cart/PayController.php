<?php

namespace App\Http\Controllers\client\cart;

use App\Models\momo;
use App\Models\vnpay;
use Carbon\Carbon;
use App\Models\film;
use App\Models\food;
use App\Models\News;
use App\Models\User;
use App\Jobs\SenMail;

use App\Models\combo;
use App\Jobs\sendMail;
use App\Models\coupon;
use App\Models\ticket;
use App\Mail\BookTicket;
use App\Models\ShowTime;
use App\Models\ticketFood;
use App\Models\coupon_usage;
use App\Models\Notification;

use Illuminate\Http\Request;
use App\Models\showtime_seat;
use App\Jobs\ResetFreezeStatusJob;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\club_point;
use Illuminate\Support\Facades\Auth;
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
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(0)->limit(12)->get();
         $seats2 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(12)->limit(10)->get();
         $seats3 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(22)->limit(12)->get();
         $seats4 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(34)->limit(10)->get();
         $seats5 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(44)->limit(12)->get();
         $seats6 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(56)->limit(10)->get();
         $seats7 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(66)->limit(12)->get();
         $seats8 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(78)->limit(12)->get();
         $f1 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(0)->limit(9)->get();
         $f2 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(9)->limit(8)->get();
         $f3 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(17)->limit(9)->get();
         $f4 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(26)->limit(9)->get();
         $f5 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(35)->limit(8)->get();
         $f6 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(43)->limit(8)->get();
         $f7 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
         ->orderBy("showtime_seats.seat_id", "asc")
         ->offset(51)->limit(9)->get();
         $f8 = DB::table('showtime_seats')
         ->join('seats', 'showtime_seats.seat_id', '=', 'seats.id')
         ->join('typeseats', 'seats.typeSeat_id', '=', 'typeseats.id')
         ->where('showtime_seats.showtime_id', $selectedShowTimeId)
         ->select('seats.*', 'typeseats.*', 'showtime_seats.isActive','showtime_seats.isFreeze','showtime_seats.id', 'showtime_seats.seat_id as showtime_seat_id')
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
        $selectedShowTimeId = session('selectedShowTimeId');
        $selectSeatArray = explode(',', $selectedSeatsValueID);
        $seats = showtime_seat::where('showtime_id', $selectedShowTimeId)
            ->whereIn('seat_id', $selectSeatArray)
            ->pluck('isActive');
        $cinemaName = $request->input("cinemaName");
        session(['cinemaName' => $cinemaName]);
        $cinemaRoom = $request->input("cinemaRoom");
        session(['cinemaRoom' => $cinemaRoom]);
        $selectedPriceSeatsValue = $request->input("selectedPriceSeatsValue");
        $totalPriceFoodValue = $request->input("totalPriceFoodValue");
        session(['selectedPriceSeatsValue' => $selectedPriceSeatsValue]);
        session(['totalPriceFoodValue' => $totalPriceFoodValue]);
        $foodData = $request->input("FoodValueName");
        $FoodValueName = json_decode($foodData, true);
        session(['FoodValueName' => $FoodValueName]);
        $couponIds = Coupon::get()->pluck('id')->toArray();
        $selectedShowTimeId = session('selectedShowTimeId');
        $user_rank_id = auth()->user()->rank_id;
        $is_used = coupon_usage::where('user_id', auth()->user()->id)
        ->whereIn('coupon_id', $couponIds)
        ->get()->pluck('coupon_id')->toArray();
        $not_useds = Coupon::where('expiry_date', '>=', Carbon::now())
        ->where(function ($query) use ($user_rank_id) {
            $query->where('rank_id', $user_rank_id)
                ->orWhereNull('rank_id');
        })
            ->orderBy('created_at', 'desc')
            ->whereNotIn('id', $is_used)
            ->get();
    
        $userId = Auth::id();
        $userExists = ticket::where("showtime_id",$selectedShowTimeId)->where("user_Id",$userId)->exists();
        if($userExists){
            $check = 1;
        }else{
            $check = 0;
        }
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
            "not_useds",
            "selectedShowTimeId",
            "userId",
            "check",
            "seats",
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
    $total_not_coupon = $request->input('total_not_coupon');
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
    $ticket->point = $total_not_coupon / 100;
    $ticket->total = $total;
    $ticket->payment = $payment;
    $ticket->status = "Chưa thanh toán";
    $ticket->code = date('Ymd-His') . rand(10, 99);
    
    $ticket->save();

    $club_point = new club_point();
    $club_point->user_id = $user->id;
    $club_point->point = $total_not_coupon / 100;
    $club_point->ticket_id = $ticket->id;
    $club_point->save();

    if($FoodValueName){
    foreach ($FoodValueName as $foodItem) {
        $ticketFood = new ticketFood();
        $ticketFood->ticket_id = $ticket->id;
        $ticketFood->cinema = $cinemaName;
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

    sendMail::dispatch($user->email,$ticket)->delay(now()->addSeconds(10));

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
            $vnpay = new vnpay();
            $vnpay->vnp_Amount = $_GET['vnp_Amount'] / 100;
            $vnpay->vnp_BankCode = $_GET['vnp_BankCode'];
            $vnpay->vnp_BankTranNo = $_GET['vnp_BankTranNo'];
            $vnpay->vnp_CardType = $_GET['vnp_CardType'];
            $vnpay->vnp_OrderInfo = $_GET['vnp_OrderInfo'];
            $vnpay->vnp_PayDate = $_GET['vnp_PayDate'];
            $vnpay->vnp_ResponseCode = $_GET['vnp_ResponseCode'];
            $vnpay->vnp_TmnCode = $_GET['vnp_TmnCode'];
            $vnpay->vnp_TransactionNo = $_GET['vnp_TransactionNo'];
            $vnpay->vnp_TransactionStatus = $_GET['vnp_TransactionStatus'];
            $vnpay->vnp_TxnRef = $_GET['vnp_TxnRef'];
            $vnpay->vnp_SecureHash = $_GET['vnp_Amount'];
            $vnpay->save();

            $selectedDate = session('selectedDate');
            $selectedHour = session('selectedHour');
            $selectedShowTimeId = session('selectedShowTimeId');
            $selectedSeatsValue = session('selectedSeatsValue');
            $selectedSeatsValueID = session('selectedSeatsValueID');
            $cinemaName = session('cinemaName');
            $cinemaRoom = session('cinemaRoom');
            $couponCode = session('coupon_code');
            $selectedPriceSeatsValue = session('selectedPriceSeatsValue');
            $totalPriceFoodValue = session('totalPriceFoodValue');
            $total_not_coupon = $selectedPriceSeatsValue + $totalPriceFoodValue;
            $total = $_GET['vnp_Amount'] / 100;
            $FoodValueName = session('FoodValueName');
            $user = auth()->user();
            $point = $user->point;
            $user->point = $point + $total_not_coupon / 100;
            $user->save();

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
            $ticket->point = $total_not_coupon / 100;
            $ticket->payment = "VNPAY";
            $ticket->status = "Đã thanh toán";
            $ticket->total = $total;
            $ticket->code = date('Ymd-His') . rand(10, 99);;
            $ticket->save();

            if($FoodValueName){
            foreach ($FoodValueName as $foodItem) {
                $ticketFood = new ticketFood();
                $ticketFood->ticket_id = $ticket->id;
                $ticketFood->name = $foodItem['name'];
                $ticketFood->cinema = $cinemaName;
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
        
            sendMail::dispatch($user->email,$ticket)->delay(now()->addSeconds(10));
            // try {
            //     Mail::to($user->email)->send(new BookTicket($ticket));
            // } catch (\Throwable $th) {
            // }
        

            $selectSeatArray = explode(',', $selectedSeatsValueID);
        
            showtime_seat::where('showtime_id',$selectedShowTimeId)
                       ->whereIn('seat_id',$selectSeatArray)
                       ->update(['isActive' => 2]);
                       session()->forget('applied_coupon');
                $queryParams = $request->except('vnp_Amount');
                $newUrl = route('success', ['film_id' => $ShowTime->id], $queryParams);
                return redirect($newUrl);
        }elseif(isset($_GET['amount'])){
            $momo = new momo();
            $momo->partnerCode = $_GET['partnerCode'];
            $momo->orderId = $_GET['orderId'];
            $momo->requestId = $_GET['requestId'];
            $momo->amount = $_GET['amount'];
            $momo->orderInfo = $_GET['orderInfo'];
            $momo->orderType = $_GET['orderType'];
            $momo->transId = $_GET['transId'];
            $momo->resultCode = $_GET['resultCode'];
            $momo->message = $_GET['message'];
            $momo->payType = $_GET['payType'];
            $momo->extraData = $_GET['extraData'];
            $momo->signature = $_GET['signature'];
            $momo->paymentOption = $_GET['paymentOption'];
            $momo->save();

            $selectedDate = session('selectedDate');
            $selectedHour = session('selectedHour');
            $selectedShowTimeId = session('selectedShowTimeId');
            $selectedSeatsValue = session('selectedSeatsValue');
            $selectedSeatsValueID = session('selectedSeatsValueID');
            $cinemaName = session('cinemaName');
            $cinemaRoom = session('cinemaRoom');
            $couponCode = session('coupon_code');
            $selectedPriceSeatsValue = session('selectedPriceSeatsValue');
            $totalPriceFoodValue = session('totalPriceFoodValue');
            $total_not_coupon = $selectedPriceSeatsValue + $totalPriceFoodValue;
            $total = $_GET['amount'];
            $FoodValueName = session('FoodValueName');
            $user = auth()->user();
            $point = $user->point;
            $user->point = $point + $total_not_coupon / 100;
            $user->save();

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
            $ticket->point = $total_not_coupon / 100;
            $ticket->payment = "MOMO";
            $ticket->status = "Đã thanh toán";
            $ticket->total = $total;
            $ticket->code = date('Ymd-His') . rand(10, 99);;
            $ticket->save();

            if($FoodValueName){
            foreach ($FoodValueName as $foodItem) {
                $ticketFood = new ticketFood();
                $ticketFood->ticket_id = $ticket->id;
                $ticketFood->name = $foodItem['name'];
                $ticketFood->cinema = $cinemaName;
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
        
            sendMail::dispatch($user->email,$ticket)->delay(now()->addSeconds(10));
            // try {
            //     Mail::to($user->email)->send(new BookTicket($ticket));
            // } catch (\Throwable $th) {
            // }
        

            $selectSeatArray = explode(',', $selectedSeatsValueID);
        
            showtime_seat::where('showtime_id',$selectedShowTimeId)
                       ->whereIn('seat_id',$selectSeatArray)
                       ->update(['isActive' => 2]);
                       session()->forget('applied_coupon');
                $queryParams = $request->except('amount');
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

    public function updates($showtime_seat_id){
        $showtime_seat = showtime_seat::find($showtime_seat_id);
        if ($showtime_seat->isFreeze == 1)  {
            $showtime_seat->update(['isFreeze' => 2]);
            // ResetFreezeStatusJob::dispatch($showtime_seat)->delay(now()->addSeconds(30));
        } else {
            $showtime_seat->update(['isFreeze' => 1]);
        }
    
        return response()->json(['message' => 'Cập nhật không thành công']);
    }
    
    
    

}
