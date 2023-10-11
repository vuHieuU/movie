<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\film;
use Illuminate\Http\Request;

class DangphatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = "đang chiếu";
        $film_topmovie = film::orderByDesc("created_at")->limit(2)->get();
        $film_nowplaying = film::where("status",$status)->get();
        $title = " now Playing";
      return view("client.dangphat",compact('title',"film_nowplaying","film_topmovie"));
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
