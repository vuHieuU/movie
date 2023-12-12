<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\favorite_film;
use App\Models\film;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
        $user = $request->input("user_id");
        $film_id = $request->input("film_id");
           $data = [
            "user_id"=>$user,
            "film_id"=>$film_id,
        ];
        favorite_film::create($data);
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user = Auth::user()->id;
        $film_id = favorite_film::select('film_id')->where('user_id',$user)->get();
        $film = film::Find($film_id);
        return view("client.FavoriteFilm",compact("film"));
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
        $user = Auth::user()->id;
        $idDelete = favorite_film::select('id')->where('film_id',$id)->first();
        $idDelete->delete($idDelete);
        return redirect()->back()->with(['success' => 'Xóa yêu thích thành công']);
    }
    public function unLike(string $id)
    {
        $user = Auth::user()->id;
        $idDelete = favorite_film::select('id')->where('film_id',$id)->first();
        $idDelete->delete($idDelete);
        return redirect()->back()->with(['success' => 'Bỏ yêu thích thành công']);
    }
}
