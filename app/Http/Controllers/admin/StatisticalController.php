<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ShowTime;
use Carbon\Carbon;
use App\Models\food;
use App\Models\film;
use App\Models\cinema;
use App\Models\ticket;
use App\Models\category;
use App\Models\ticketFood;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StatisticalController extends Controller
{
    public function index(Request $request)    {
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
        $countfood = DB::table("food")->count();
        $countfoodsell = DB::table("ticket_food")->sum("quantity");
        $countfoodremaining = food::get();

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

        $cinemas = cinema::pluck('name')->toArray();
        $cinemaSums = [];
        
        foreach ($cinemas as $cinema) {
            $sum = ticket::where('cinema', $cinema)->sum('total');
            $cinemaSums[] = ['cinema' => $cinema, 'revenue' => $sum];
        }
        return view('admin.statistical.index',
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
                "countfood",
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
                'countfoodsell',
                'countfoodremaining',
                'cinemas',
                'cinemaSums',
            )
        );
    }
    public function indexFood(Request $request)    {
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
        $countfood = DB::table("food")->count();
        $countfoodsell = DB::table("ticket_food")->sum("quantity");
        $countfoodremaining = food::get();

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

        $cinemas = cinema::pluck('name')->toArray();
        $cinemaSums = [];
        
        foreach ($cinemas as $cinema) {
            $sum = ticket::where('cinema', $cinema)->sum('total');
            $cinemaSums[] = ['cinema' => $cinema, 'revenue' => $sum];
        }
        return view('admin.statistical.Food',
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
                "countfood",
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
                'countfoodsell',
                'countfoodremaining',
                'cinemas',
                'cinemaSums',
            )
        );
    }
    public function indexFilm(Request $request)   {
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
        $countfood = DB::table("food")->count();
        $countfoodsell = DB::table("ticket_food")->sum("quantity");
        $countfoodremaining = food::get();

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

        $cinemas = cinema::pluck('name')->toArray();
        $cinemaSums = [];
        
        foreach ($cinemas as $cinema) {
            $sum = ticket::where('cinema', $cinema)->sum('total');
            $cinemaSums[] = ['cinema' => $cinema, 'revenue' => $sum];
        }
        return view('admin.statistical.Film',
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
                "countfood",
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
                'countfoodsell',
                'countfoodremaining',
                'cinemas',
                'cinemaSums',
            )
        );
    }
    public function show($cinemaName)
    {

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
        $tickettong = ticket::get()->count();
        $cinema = cinema::get();
        // $cinemas = ticket::get();
        //lọc giờ film được đặt nhiều nhất
        $mostBookedHour = Ticket::select('selected_hour')
            ->groupBy('selected_hour')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        if ($mostBookedHour) {
            // Định dạng thời gian
            $formattedTime = Carbon::parse($mostBookedHour->selected_hour)->format('H:i:s');
        } else {
            return view('no_data_to_display');
        }

        //lọc film film được đặt nhiều nhất
        $mostBookedfilm = Ticket::select('film_name')
            ->groupBy('film_name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $mostBookedfood = ticketFood::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $ticketFood = ticketFood::all();
        $tickets = Ticket::where('cinema', $cinemaName)->sum("total");
        $cinemalist = cinema::get();
        $tickettong = ticket::get()->count();
        // dd($tickets);
        $countfoodsell = DB::table("ticket_food")->sum("quantity");
        $countfoodremaining = food::get();
        $countfilm = DB::table("films")->count();
        $countuser = DB::table("users")->count();
        $category = category::get();
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
            $totalRevenue = Ticket::where('cinema', $cinemaName)->where('film_id', $film->id)->sum('total');
            $revenues[$filmName] = $totalRevenue;
            // $revenuesData = json_encode($revenues);
        }

        return view(
            'client.layout.session.OverviewCinema',
            compact(
                'tickettong',
                'formattedTime',
                'mostBookedHour',
                'ticketsCurrentYear',
                'ticketsCurrentMonth',
                'ticketsSevenDaysAgo',
                'ticketfoodCurrentYear',
                'ticketfoodCurrentMonth',
                'ticketfoodSevenDaysAgo',
                'tickettong',
                'tickets',
                // 'cinemas',
                'cinemaName',
                'cinemalist',
                'title',
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
                'countfoodsell',
                'countfoodremaining'
            )
        );
    }

    public function detailCinema($cinemaId){
        session(['cinemaId' => $cinemaId]);
        $TotalTicketCinema = ticket::where('cinema', $cinemaId)->count();
        $ShowTimeCinema = Ticket::select('selected_hour')
            ->groupBy('selected_hour')
            ->orderByRaw('COUNT(*) DESC')
            ->where('cinema', $cinemaId)
            ->first();
            if ($ShowTimeCinema) {
                $ShowTimeCinemas = Carbon::parse($ShowTimeCinema->selected_hour)->format('H:i:s');
            } else {
                $ShowTimeCinemas = '';
            }
         $filmCinema = Ticket::select('film_name')
            ->groupBy('film_name')
            ->orderByRaw('COUNT(*) DESC')
            ->where('cinema', $cinemaId)    
            ->first();

        $film_name = ticket::where('cinema', $cinemaId)->get();

        $films = Film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = Ticket::where('film_id', $film->id)->sum('total');
            $revenues[$filmName] = $totalRevenue;
        }
        $CountFilmCinema = film::count();
        $sumtotal = ticket::where('cinema', $cinemaId)->sum("total");
        
        return view('admin.layout.ajax.statistical', compact('sumtotal','TotalTicketCinema','ShowTimeCinemas',
              'filmCinema','films','revenues','film_name','CountFilmCinema'));
    }

    public function detailFilm($film_name){
        $cinemaId = session('cinemaId');
        $data = ticket::where('film_name', $film_name)->where('cinema', $cinemaId)
                      ->groupBy('selected_date')
                      ->select('selected_date', \DB::raw('SUM(total) as total'))
                      ->get();
    
        $day = $data->pluck('selected_date')->toArray();
        $total = $data->pluck('total')->toArray();
    
        return view('admin.layout.ajax.statisticalDetail', compact('day', 'total'));
    }
    
    
}
