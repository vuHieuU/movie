<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $countcategory = DB::table("film_categories")
        // ->select("dmid",DB::raw("COUNT(*) as countcategory"))
        // ->groupBy("dmid")
        // ->get();
        // $countfilm = DB::table("films")->count();
        // $sumtotal = DB::table("tickets")->sum("total");
        return view('admin.layout.home');
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
