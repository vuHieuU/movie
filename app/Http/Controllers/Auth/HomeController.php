<?php

namespace App\Http\Controllers\Auth;

use Carbon\Carbon;
use App\Models\film;
use App\Models\User;
use App\Models\ticket;
use App\Models\ticketFood;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $mostBookedHour = ticket::select('selected_hour')
            ->groupBy('selected_hour')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        if ($mostBookedHour) {

            $formattedTime = Carbon::parse($mostBookedHour->selected_hour)->format('H:i:s');
        } else {
            $formattedTime = '';
        }

        //lọc film 
        $mostBookedfilm = ticket::select('film_name')
            ->groupBy('film_name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        //lọc payment 
        $payments = ticket::select('payment')
            ->groupBy('payment')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        //lọc combo 
        $mostBookedfood = ticketFood::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $tickettong = ticket::where('status','Đã thanh toán')->get()->count();
        $countfilm = film::count();
        $countuser = User::count();
        $sumtotal = ticket::where('status','Đã thanh toán')->sum("total");
        $title = "Overview";
        $films = film::get();
        return view('admin/Overview',
            compact(
                'formattedTime',
                'tickettong',
                'title',
                "countuser",
                "countfilm",
                "sumtotal",
                "mostBookedfilm",
                'mostBookedfood',
                'films',
                'payments'
            )
        );
    }
}
