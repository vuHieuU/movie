<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\film;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeeklyShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $film = film::get();
        
        // $showtime = ShowTime::where("show_times.id",2)->get();
        $showtime = ShowTime::get();
        
        $title = "Weekly Showtime";

        $filmshowtime = DB::table('films')
        ->join('show_times','films.id' ,'=',  'show_times.film_id')
        ->select('show_times.*','films.*')
        // ->where("show_times.id",4)
        ->get();


        
        return view('client.weeklyshowtime',compact('title',"showtime","film","filmshowtime"));
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
            
        $title = "Weekly Showtime";
        $filmshowtime = DB::table('films')
        ->join('show_times','films.id' ,'=',  'show_times.film_id')
        ->select('show_times.*','films.*')
        ->where("show_times.id",$id)
        ->get();
        $showtime = ShowTime::get();
        // $showtime = ShowTime::where("show_times.id",$id)->get();

        
        return view('client.weeklyshowtime',compact("title","filmshowtime","showtime"));
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
