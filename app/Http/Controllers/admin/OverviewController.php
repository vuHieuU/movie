<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OverviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::get();

        // $countcategory = DB::table("film_categories")
        //     ->select("dmid", DB::raw("COUNT(*) as countcategory"))
        //     ->groupBy("dmid")
        //     ->get();
        $countfilm = DB::table("films")->count();
        $sumtotal = DB::table("tickets")->sum("total");
        $categoriesWithCount = DB::table("categories")
            ->select("categories.id", "categories.name", DB::raw("COUNT(film_categories.dmid) as countcategory"))
            ->Join('film_categories', 'categories.id', '=', 'film_categories.dmid')
            ->groupBy("categories.id", "categories.name")
            ->get();
        // $categories = DB::table("film_categories")
        //     ->join('categories', 'film_categories.dmid', '=', 'categories.id')
        //     ->select("categories.id", "categories.name")
        //     ->get();
        $title = "Overview";
        return view('admin/overview', compact('title', "countfilm", "sumtotal",  "category", "categoriesWithCount"));
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
