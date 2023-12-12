<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Requests\Client\CommentRequest;

class CommentController extends Controller
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
        $data = new comment();
        $data->film_id = $request->input("film_id");
        $data->user_id = $request->input("user_id");
        $data->name = $request->input("name");
        $data->email = $request->input("email");
        $data->status = 0;
        $data->comment_text = $request->input("comment_text");
        $data->save();
        
        return redirect()->back();
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
