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
        $title = "home";
        $film = ShowTime::limit(5)->get();
        return view('client.home',compact("title","film"));

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
