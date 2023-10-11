<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\cinema;
use App\Models\film;
use App\Models\ShowTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class DetailFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($id)
    {
        $film_show_time = ShowTime::findOrFail($id);
        // $cinema_id = Cinema::findOrFail($id);
        // $film = Film::findOrFail($id);
        $ShowTime = ShowTime::where("cinema_id", $film_show_time->cinema->id)->where('film_id',$film_show_time->film->id)->get();
        // dd($ShowTime);
    $categoryfilm_category = DB::table("categories")
    ->join("film_categories", "categories.id", "=", "film_categories.dmid")
    ->select("categories.*", "film_categories.*")
    ->where("film_categories.film_id",$id)
    ->get();

       
        $ratings = Rating::where("film_id",$film_show_time->film->id);
        $rating_sum = Rating::where("film_id",$film_show_time->film->id)->sum("star_rated");
        $user_rating = Rating::where("film_id",$film_show_time->film->id)->where("user_id",Auth::id())->first();

        if($ratings->count() > 0){
            $rating_value = $rating_sum / $ratings->count();
        }
        else{
            $rating_value = 0;
        }
        $title = "Detail";
        return view('client.DetailFilm',compact(
            'title',"ShowTime","categoryfilm_category",
            "ratings","rating_value","user_rating",'film_show_time'
        ));

    }
   
}