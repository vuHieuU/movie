<?php

namespace App\Http\Controllers\client;

use App\Models\film;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class Detail_filmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $data = film::find($id);
        $title = "Detail";
        $ratings = Rating::where("film_id",$data->id);
        $rating_sum = Rating::where("film_id",$data->id)->sum("star_rated");
        $user_rating = Rating::where("film_id",$data->id)->where("user_id",Auth::id())->first();

        if($ratings->count() > 0){
            $rating_value = $rating_sum / $ratings->count();
        }
        else{
            $rating_value = 0;
        }
        return view('client.detail_film',compact('title',"data","ratings","rating_value","user_rating"));
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
