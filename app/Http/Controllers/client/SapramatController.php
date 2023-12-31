<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\film;
use App\Models\News;
use App\Models\ShowTime;
use GuzzleHttp\Psr7\Query;
use Illuminate\Http\Request;

class SapramatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Comming soon";
        $status = "2";
        $new_footer  = News::orderByDesc("created_at")->limit(2)->get();
        // $film_comming_soon = film::where("status",$status)->get();
        // $film_comming_soon = ShowTime::whereHas("film",function($query) use ($status){
        //     $query->where('status', $status);
        // })->get();
        $film_comming_soon =film::where("status", $status)->get();
        return view("client.sapramat",compact('title',"film_comming_soon","new_footer"));
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
