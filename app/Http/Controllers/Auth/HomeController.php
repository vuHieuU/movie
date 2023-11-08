<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\film;
use App\Models\cinema;
use App\Models\ticket;
use App\Models\category;
use App\Models\ticketFood;
use Illuminate\Support\Facades\DB;
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
        $category = category::get();
        $today = date('Y-m-d');
        // Tính ngày 7 ngày trước
        $sevenDaysAgo = date('Y-m-d', strtotime('-7 days'));
        // Lấy tháng hiện tại
        // $currentMonth = date('m');
        // Lấy tháng trước
        $previousMonth = date('m', strtotime('-1 month'));
        // Lấy năm hiện tại
        $currentYear = date('Y');
        // Lấy danh sách các vé được đặt trong khoảng thời gian 7 ngày trước
        $ticketsSevenDaysAgo = ticket::where('created_at', '>=', $sevenDaysAgo)->where('created_at', '<=', $today)->get();
        // Lấy danh sách các vé được đặt trong tháng hiện tại
        $ticketsCurrentMonth = ticket::whereMonth('created_at', $previousMonth)->get();
        // Lấy danh sách các vé được đặt trong năm hiện tại
        $ticketsCurrentYear = ticket::whereYear('created_at', $currentYear)->get();
        $ticketfoodSevenDaysAgo = ticketFood::where('created_at', '>=', $sevenDaysAgo)->where('created_at', '<=', $today)->get();
        // Lấy danh sách các vé được đặt trong tháng hiện tại
        $ticketfoodCurrentMonth = ticketFood::whereMonth('created_at', $previousMonth)->get();
        // Lấy danh sách các vé được đặt trong năm hiện tại
        $ticketfoodCurrentYear = ticketFood::whereYear('created_at', $currentYear)->get();
        //lọc giờ 
        $mostBookedHour = Ticket::select('selected_hour')
            ->groupBy('selected_hour')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        if ($mostBookedHour) {

            $formattedTime = Carbon::parse($mostBookedHour->selected_hour)->format('H:i:s');
        } else {
            $formattedTime = '';
        }

        //lọc film 
        $mostBookedfilm = Ticket::select('film_name')
            ->groupBy('film_name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        //lọc combo 
        $mostBookedfood = ticketFood::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $ticketFood = ticketFood::all();
        $tickettong = ticket::get()->count();
        $cinemalist = cinema::get();
        $cinematotal = ticket::get()->sum("total");

        // dd($mostBookedfilm);
        $tickets = ticket::get()->sum("total");
        $countfilm = DB::table("films")->count();
        $countuser = DB::table("users")->count();
        $sumtotal = DB::table("tickets")->sum("total");
        $categoriesWithCount = DB::table("categories")
            ->select("categories.id", "categories.name", DB::raw("COUNT(film_categories.dmid) as countcategory"))
            ->Join('film_categories', 'categories.id', '=', 'film_categories.dmid')
            ->groupBy("categories.id", "categories.name")
            ->get();

        $title = "Overview";
        $films = Film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = Ticket::where('film_id', $film->id)->sum('total');
            $revenues[$filmName] = $totalRevenue;
            // $revenuesData = json_encode($revenues);
        }
        return view('admin/overview',
            compact(
                'formattedTime',
                'mostBookedHour',
                'ticketsCurrentYear',
                'ticketsCurrentMonth',
                'ticketsSevenDaysAgo',
                'ticketfoodCurrentYear',
                'ticketfoodCurrentMonth',
                'ticketfoodSevenDaysAgo',
                'tickettong',
                'cinemalist',
                'cinematotal',
                'title',
                'tickets',
                "countuser",
                "countfilm",
                "sumtotal",
                "category",
                "categoriesWithCount",
                "mostBookedfilm",
                'mostBookedfood',
                'ticketFood',
                'films',
                'revenues',
                // 'revenuesData'
            )
        );
    }
}
