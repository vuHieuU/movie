<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\cinema;
use App\Models\favorite_film;
use App\Models\film;
use App\Models\News;
use App\Models\ShowTime;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rating;
use Illuminate\Support\Facades\Auth;

class DetailFilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index($slug)
    {
        $check = 1;
        $film = film::where('slug', $slug)->firstOrFail();
        $filmtopmovie = Film::orderByDesc("created_at")->limit(4)->get();
        
        $newdetail = News::orderByDesc("created_at")->limit(2)->get();
        
            $numberOfDays = 7; // Số ngày bạn muốn liệt kê
            $dateList = array();
            $currentDate = strtotime(date('Y-m-d H:i:s')); // Lấy timestamp của ngày hiện tại

            while (count($dateList) < $numberOfDays) {
                $dateList[] = date('Y-m-d', $currentDate);
                $currentDate = strtotime('+1 day', $currentDate);
            }
            
            $ShowTime = ShowTime::where('film_id', $film->id)
            ->whereIn('day', $dateList)
            ->where('day', '>=', date('Y-m-d'))
            ->orderBy('day')
            ->orderBy('hour')
            ->get();

        $categoryfilm_category = DB::table("categories")
            ->join("film_categories", "categories.id", "=", "film_categories.dmid")
            ->select("categories.*", "film_categories.*")
            ->where("film_categories.film_id", $slug)
            ->get();
        if (auth()->check()) {
            $user = Auth::user()->id;
            $exists = favorite_film::where('user_id', $user)->where('film_id', $slug)->exists();
            if ($exists) {
                $check = 0;
            }
        } else {
            $user = 0;
        }
        // $ratings = Rating::where("film_id", $film_show_time->film->id);
        // $rating_sum = Rating::where("film_id", $film_show_time->film->id)->sum("star_rated");
        // $user_rating = Rating::where("film_id", $film_show_time->film->id)->where("user_id", Auth::id())->first();

        // if ($ratings->count() > 0) {
        //     $rating_value = $rating_sum / $ratings->count();
        // } else {
        //     $rating_value = 0;
        // }

        // lấy tất cả comment có id phim = ...
        $comments = comment::where("film_id", $film->id)->where("status", 0)->orderByDesc('created_at')->limit(8)->get();

        $title = "Detail";
        return view('client.DetailFilm', compact(
            'title',
            "ShowTime",
            "categoryfilm_category",
            // "ratings",
            // "rating_value",
            // "user_rating",
            // 'film_show_time',
            'user',
            'check',
            'film',
            "filmtopmovie",
            "newdetail",
            "comments"
        ));
    }
}
