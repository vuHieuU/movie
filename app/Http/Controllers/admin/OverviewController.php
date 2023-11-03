<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\cinema;
use App\Models\ticket;
use App\Models\ticketFood;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OverviewController extends Controller
{
    /**
     * Display a listing of the resource.
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
            return view('no_data_to_display');
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
        return view(
            'admin/overview',
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
                'ticketFood'
            )
        );
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


        return view(
            'client.layout.session.OverviewCinema',
            // 'admin/overview',
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
                'ticketFood'
            )
        );
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
