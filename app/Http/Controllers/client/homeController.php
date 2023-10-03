<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\film;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $film_nowplaying = film::orderByDesc("created_at")->limit(5)->get();
       $categories =category::get();
     

        $title = "home";
        return view('client.home',compact("title","film_nowplaying","categories"));
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
        //
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
