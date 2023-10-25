<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\cinema;
use App\Models\film;
use App\Models\News;
use App\Models\ShowTime;
use Illuminate\Http\Request;
class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "home";
        $new_footer  = News::inRandomOrder()->limit(2)->get();
        $new_latest  = News::orderByDesc("created_at")->limit(1)->get();
        $new_latest_new  = News::inRandomOrder()->limit(2)->get();
        $film_nowplaying = film::orderByDesc("created_at")->limit(5)->get();
        $film_topmovie = film::orderByDesc("created_at")->limit(15)->get();
        $categories =category::get();
        $film = film::limit(5)->get();
        
        return view('client.home',compact("title","film_nowplaying","categories","film","film_topmovie","new_footer","new_latest","new_latest_new"));

    }
    // public function show($id)
    // {
    //     $categories =category::get();
    //     $cinema_id = Cinema::findOrFail($id);
    //     $film = ShowTime::where("cinema_id", $cinema_id->id)->with('film')->limit(5)->get();
    //     $film_topmovie = ShowTime::where("cinema_id", $cinema_id->id)->orderByDesc("created_at")->with('film')->limit(15)->get();
    //     return view('client.layout.session.FilmHome',compact("film","categories","film_topmovie"));

    // }
}
