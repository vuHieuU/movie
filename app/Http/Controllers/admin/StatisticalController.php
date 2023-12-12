<?php

namespace App\Http\Controllers\admin;

use Carbon\Carbon;
use App\Models\film;
use App\Models\food;
use App\Models\cinema;
use App\Models\ticket;
use App\Models\category;
use App\Models\ShowTime;
use App\Models\ticketFood;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

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
        $films = film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = ticket::where('film_id', $film->id)->sum('total');
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
        $foodTotals = DB::table('ticket_food')
        ->join('food', 'ticket_food.name', '=', 'food.name')
        ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
        ->groupBy('food.name')
        ->get();
        $grandTotal = 0;
           foreach($foodTotals as $foodTotal){
              $grandTotal += $foodTotal->total;
           }
           $cinemalist = cinema::get();
        $countfood = food::get()->count();
        $countfoodsell = ticketFood::get()->count();
        return view('admin.statistical.Food',compact('grandTotal','foodTotals','cinemalist','countfood','countfoodsell'));
    }
    public function detailFoodCinema($cinema)    {
        session(['cinema' => $cinema]);
        $foodTotals = DB::table('ticket_food')
        ->join('food', 'ticket_food.name', '=', 'food.name')
        ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
        ->where('cinema',$cinema)
        ->groupBy('food.name')
        ->get();
        $grandTotal = 0;
           foreach($foodTotals as $foodTotal){
              $grandTotal += $foodTotal->total;
           }
           $cinemalist = cinema::get();
        return view('admin.layout.ajax.foodDetailCinema',compact('grandTotal','foodTotals','cinemalist'));
    }
    public function detailFood($days)
    {
        $currentDate = Carbon::now();
        $startDate = $currentDate->copy()->subDays($days);
        $revenueSelectedDays = $this->calculateRevenue($startDate, $currentDate);

        $startDates = now()->subDays($days);

        $foodTotals = ticketFood::join('food', 'ticket_food.name', '=', 'food.name')
            ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
            ->where('ticket_food.created_at', '>=', $startDates)
            ->groupBy('food.name')
            ->get();
        return view('admin.layout.ajax.foodStatistical', compact('revenueSelectedDays','foodTotals'));
    }
    public function detailFoodCinemas($days)
    {
        $cinema = session('cinema');
        $currentDate = Carbon::now();
        $startDate = $currentDate->copy()->subDays($days);
        $revenueSelectedDays = $this->calculateRevenues($startDate, $currentDate);

        $startDates = now()->subDays($days);

        $foodTotals = ticketFood::join('food', 'ticket_food.name', '=', 'food.name')
            ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
            ->where('ticket_food.created_at', '>=', $startDates)
            ->where('cinema', $cinema)
            ->groupBy('food.name')
            ->get();
        return view('admin.layout.ajax.foodStatisticals', compact('revenueSelectedDays','foodTotals'));
    }

    private function calculateRevenue($startDate, $endDate) {
        $foodTotals = DB::table('ticket_food')
            ->join('food', 'ticket_food.name', '=', 'food.name')
            ->whereBetween('ticket_food.created_at', [$startDate, $endDate])
            ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
            ->groupBy('food.name')
            ->get();
    
        $grandTotal = 0;
        foreach ($foodTotals as $foodTotal) {
            $grandTotal += $foodTotal->total;
        }
    
        return $grandTotal;
    }
    private function calculateRevenues($startDate, $endDate) {
        $cinema = session('cinema');
        $foodTotals = DB::table('ticket_food')
            ->join('food', 'ticket_food.name', '=', 'food.name')
            ->whereBetween('ticket_food.created_at', [$startDate, $endDate])
            ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
            ->where('cinema', $cinema)
            ->groupBy('food.name')
            ->get();
    
        $grandTotal = 0;
        foreach ($foodTotals as $foodTotal) {
            $grandTotal += $foodTotal->total;
        }
    
        return $grandTotal;
    }
    
    public function indexFilm(Request $request)   {
        $foodTotals = DB::table('ticket_food')
        ->join('food', 'ticket_food.name', '=', 'food.name')
        ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
        ->groupBy('food.name')
        ->get();
        $grandTotal = 0;
           foreach($foodTotals as $foodTotal){
              $grandTotal += $foodTotal->total;
           }
        return view('admin.statistical.Film',compact('foodTotals','grandTotal'));
    }

    public function detailFilms($days)
    {
        $currentDate = Carbon::now();
        $startDate = $currentDate->copy()->subDays($days);
        $revenueSelectedDays = $this->calculateRevenueFilm($startDate, $currentDate);

        $startDates = now()->subDays($days);

        $foodTotals = ticketFood::join('food', 'ticket_food.name', '=', 'food.name')
            ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
            ->where('ticket_food.created_at', '>=', $startDates)
            ->groupBy('food.name')
            ->get();
        return view('admin.layout.ajax.foodStatistical', compact('revenueSelectedDays','foodTotals'));
    }

    private function calculateRevenueFilm($startDate, $endDate) {
        $foodTotals = DB::table('ticket_food')
            ->join('food', 'ticket_food.name', '=', 'food.name')
            ->whereBetween('ticket_food.created_at', [$startDate, $endDate])
            ->select('food.name', DB::raw('SUM(food.price * ticket_food.quantity) as total'))
            ->groupBy('food.name')
            ->get();
    
        $grandTotal = 0;
        foreach ($foodTotals as $foodTotal) {
            $grandTotal += $foodTotal->total;
        }
    
        return $grandTotal;
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
        $mostBookedHour = ticket::select('selected_hour')
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
        $mostBookedfilm = ticket::select('film_name')
            ->groupBy('film_name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $mostBookedfood = ticketFood::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $ticketFood = ticketFood::all();
        $tickets = ticket::where('cinema', $cinemaName)->sum("total");
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
        $films = film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = ticket::where('cinema', $cinemaName)->where('film_id', $film->id)->sum('total');
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
        $ShowTimeCinema = ticket::select('selected_hour')
            ->groupBy('selected_hour')
            ->orderByRaw('COUNT(*) DESC')
            ->where('cinema', $cinemaId)
            ->first();
            if ($ShowTimeCinema) {
                $ShowTimeCinemas = Carbon::parse($ShowTimeCinema->selected_hour)->format('H:i:s');
            } else {
                $ShowTimeCinemas = '';
            }
         $filmCinema = ticket::select('film_name')
            ->groupBy('film_name')
            ->orderByRaw('COUNT(*) DESC')
            ->where('cinema', $cinemaId)    
            ->first();

        $film_name = ticket::where('cinema', $cinemaId)->get();

        $films = film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = ticket::where('film_id', $film->id)->where('cinema', $cinemaId)->sum('total');
            $revenues[$filmName] = $totalRevenue;
        }
        $CountFilmCinema = film::count();
        $sumtotal = ticket::where('cinema', $cinemaId)->sum("total");
        $cinemalist = cinema::get();
        return view('admin.layout.ajax.statistical', compact('sumtotal','TotalTicketCinema','ShowTimeCinemas',
              'filmCinema','films','revenues','film_name','CountFilmCinema','cinemalist'));
    }


    public function detailFilmCinemasDay($days)
    {
        $cinemaId = session('cinemaId');
        $revenueLastDays = ticket::where('cinema', $cinemaId)
            ->where('created_at', '>=', Carbon::now()->subDays($days))
            ->sum('total');

            $filmsData = ticket::where('cinema', $cinemaId)
            ->where('created_at', '>=', Carbon::now()->subDays($days))
            ->select('film_name', DB::raw('SUM(total) as total_revenue'))
            ->groupBy('film_name')
            ->get();
    
        // Prepare data for the view
        $filmNames = $filmsData->pluck('film_name')->toArray();
        $totalRevenues = $filmsData->pluck('total_revenue')->toArray();
    
        return view('admin.layout.ajax.statisticalFilmDay', compact('revenueLastDays','filmNames','totalRevenues'));
    }


    // ********** cinema // 
    public function allCinema(Request $request)    {
        $countfilm = DB::table("tickets")->where('status','Đã thanh toán')->count();
        $countuser = DB::table("users")->count();
        $sumtotal = DB::table("tickets")->where('status','Đã thanh toán')->sum("total");
        $title = "Overview";
        $films = film::get();
        $revenues = [];
        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = ticket::where('film_id', $film->id)->where('status','Đã thanh toán')->sum('total');
            $revenues[$filmName] = $totalRevenue;
        }
        $cinemas = cinema::pluck('name')->toArray();
        $cinemaSums = [];
        foreach ($cinemas as $cinema) {
            $sum = ticket::where('cinema', $cinema)->where('status','Đã thanh toán')->sum('total');
            $cinemaSums[] = ['cinema' => $cinema, 'revenue' => $sum];
        }
        return view('admin.statistical.all_cinema',
            compact(
                "countuser",
                "countfilm",
                "sumtotal",
                'revenues',
                'cinemas',
                'cinemaSums',
            )
        );
    }

    public function allCinemaDay($days){
        $cinemas = cinema::pluck('name')->toArray();
        $cinemaSums = [];
        $grandTotal = 0; // Khởi tạo tổng doanh thu toàn bộ các rạp
    
        foreach ($cinemas as $cinema) {
            $sum = ticket::where('cinema', $cinema)
                ->where('status','Đã thanh toán')
                ->where('created_at', '>=', now()->subDays($days))
                ->sum('total');
    
            $grandTotal += $sum; // Cộng tổng doanh thu của mỗi rạp vào tổng doanh thu toàn bộ
    
            $cinemaSums[] = ['cinema' => $cinema, 'revenue' => $sum];
        }
    
        return view('admin.statistical.ajax.cinemaDay', compact('cinemas', 'cinemaSums', 'grandTotal'));
    }
    // ********** film // 
    public function allFilm(){
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
        //lọc combo 
        $mostBookedfood = ticketFood::select('name')
            ->groupBy('name')
            ->orderByRaw('COUNT(*) DESC')
            ->first();
        $ticketFood = ticketFood::all();
        $tickettong = ticket::get()->count();
        $cinemalist = cinema::get();
        $cinematotal = ticket::get()->where('status','Đã thanh toán')->sum("total");

        // dd($mostBookedfilm);
        $tickets = ticket::get()->where('status','Đã thanh toán')->sum("total");
        $countfilm = DB::table("tickets")->where('status','Đã thanh toán')->count();
        $countfood = DB::table("food")->count();
        $countfoodsell = DB::table("ticket_food")->sum("quantity");
        $countfoodremaining = food::get();

        $countuser = DB::table("users")->count();
        $sumtotal = DB::table("tickets")->where('status','Đã thanh toán')->sum("total");
        $categoriesWithCount = DB::table("categories")
            ->select("categories.id", "categories.name", DB::raw("COUNT(film_categories.dmid) as countcategory"))
            ->Join('film_categories', 'categories.id', '=', 'film_categories.dmid')
            ->groupBy("categories.id", "categories.name")
            ->get();

        $title = "Overview";
        $films = film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = ticket::where('film_id', $film->id)->where('status','Đã thanh toán')->sum('total');
            $revenues[$filmName] = $totalRevenue;
            // $revenuesData = json_encode($revenues);
        }

        $cinemas = cinema::pluck('name')->toArray();
        $cinemaSums = [];
        
        foreach ($cinemas as $cinema) {
            $sum = ticket::where('cinema', $cinema)->where('status','Đã thanh toán')->sum('total');
            $cinemaSums[] = ['cinema' => $cinema, 'revenue' => $sum];
        }
        return view('admin.statistical.all_film',
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
    public function allCinemaFilm($id){
        $cinema = cinema::find($id);
        session(['cinemaId' => $cinema->name]);
        $category = category::get();
        $cinemalist = cinema::get();
        // dd($mostBookedfilm);
        $tickets = ticket::get()->where('status','Đã thanh toán')->sum("total");
        $countfilm = DB::table("tickets")->where('cinema',$cinema->name)->where('status','Đã thanh toán')->count();
        $countuser = DB::table("users")->count();
        $sumtotal = DB::table("tickets")->where('cinema',$cinema->name)->where('status','Đã thanh toán')->sum("total");
        $categoriesWithCount = DB::table("categories")
            ->select("categories.id", "categories.name", DB::raw("COUNT(film_categories.dmid) as countcategory"))
            ->Join('film_categories', 'categories.id', '=', 'film_categories.dmid')
            ->groupBy("categories.id", "categories.name")
            ->get();

        $title = "Overview";
        $film_name = ticket::where('cinema', $cinema->name)->get();
        $films = film::get();
        $revenues = [];

        foreach ($films as $film) {
            $filmName = $film->name;
            $totalRevenue = ticket::where('film_id', $film->id)->where('cinema', $cinema->name)->where('status','Đã thanh toán')->sum('total');
            $revenues[$filmName] = $totalRevenue;
        }
        return view('admin.statistical.all_cinemaFilm',
            compact(
                'cinemalist',
                'title',
                'tickets',
                "countuser",
                "countfilm",
                "sumtotal",
                "category",
                "film_name",
                "revenues",
            )
        );
    }
    public function detailFilm($film_name){
        $cinemaId = session('cinemaId');
        $data = ticket::where('film_name', $film_name)->where('cinema', $cinemaId)
                      ->where('status','Đã thanh toán')
                      ->groupBy('selected_date')
                      ->select('selected_date', \DB::raw('SUM(total) as total'))
                      ->get();
    
        $day = $data->pluck('selected_date')->toArray();
        $total = $data->pluck('total')->toArray();
        $sumtotal = ticket::where('cinema', $cinemaId)->where('film_name',$film_name)->where('status','Đã thanh toán')->sum("total");
        return view('admin.layout.ajax.statisticalDetail', compact('day', 'total','sumtotal'));
    }
}
