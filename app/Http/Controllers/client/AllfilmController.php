<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllfilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $films = film::get();
        $category = category::all();
        $film = DB::table('categories')
        ->join('film_categories', 'categories.id', '=', 'film_categories.dmid')
        ->join('films', 'film_categories.film_id' ,'=','films.id')
        // ->where('categories.id', 1)
        ->select('categories.*','film_categories.*','films.*')
        ->get();
        $title = "Now Playing";
       return view("client.film",compact("category","film","films"));
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
         $films = film::get();
    $category = category::get();
    $film = DB::table('categories')
        ->join('film_categories', 'categories.id', '=', 'film_categories.dmid')
        ->join('films', 'film_categories.film_id' ,'=','films.id')
        ->where('categories.id', $id)
        ->select('categories.*','film_categories.*','films.*')
        ->get();
    return view("client.film",compact("film","category","films"));
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
