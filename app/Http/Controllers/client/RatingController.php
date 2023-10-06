<?php

namespace App\Http\Controllers\client;

use App\Models\Rating;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class RatingController extends Controller
{
    public function add(Request $request)
    {
        $star_rated = $request->input("film_rating");
        $film_id = $request->input("film_id");

        $existing_rating = Rating::where("user_id", Auth::id())->where("film_id", $film_id)->first();


        if ($existing_rating) {

            $existing_rating->star_rated = $star_rated;

            $existing_rating->save();
        } else {
            Rating::create([
                "user_id" => Auth::id(),
                "film_id" => $film_id,
                "star_rated" => $star_rated,
            ]);
        }

        return redirect()->back()->with("susscess", "Cảm ơn bạn đã đánh giá phim");
    }
}
