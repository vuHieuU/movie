<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\cinema;
use App\Models\film;
use App\Models\ShowTime;
use Illuminate\Http\Request;
class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        
        $film_nowplaying = film::orderByDesc("created_at")->limit(5)->get();
        $film_topmovie = film::orderByDesc("created_at")->limit(15)->get();

       $categories =category::get();
     

        $title = "home";
$title = "home";
        $film = ShowTime::limit(5)->get();
        $films = film::all();
        return view('client.home',compact("title","film_nowplaying","categories","films","film_topmovie"));

        
        // return view('client.home',compact("title","film"));

    }
    public function show($id)
    {
        $title = "home";
        $categories =category::get();
        $cinema_id = Cinema::findOrFail($id);
        $film = ShowTime::where("cinema_id", $cinema_id->id)->with('film')->limit(5)->get();
        return view('client.home',compact("title","film","categories"));

    }

  
}
