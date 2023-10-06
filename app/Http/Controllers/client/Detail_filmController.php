<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\film;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class Detail_filmController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($id)
    {
        $show_time = DB::table('films')
        ->join('show_times', 'films.id', '=', 'show_times.film_id')
        ->select('films.*', 'show_times.*')
        ->where("films.id",$id) 
        ->get();
    // dd($show_time);
    $categoryfilm_category = DB::table("categories")
    ->join("film_categories", "categories.id", "=", "film_categories.dmid")
    ->select("categories.*", "film_categories.*")
    ->where("film_categories.film_id",$id)
    ->get();

        $film = film::findOrFail($id);
        $ratings = Rating::where("film_id",$film->id);
        $rating_sum = Rating::where("film_id",$film->id)->sum("star_rated");
        $user_rating = Rating::where("film_id",$film->id)->where("user_id",Auth::id())->first();

        if($ratings->count() > 0){
            $rating_value = $rating_sum / $ratings->count();
        }
        else{
            $rating_value = 0;
        }
        $title = "Detail";
        return view('client.detail_film',compact(
            'title',"film","show_time","categoryfilm_category",
            "ratings","rating_value","user_rating"
        ));

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
       $day =ShowTime::find($id);
       return view('client.detail_film',compact('day'));
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
