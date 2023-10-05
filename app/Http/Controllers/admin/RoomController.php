<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\cinema;
use App\Models\room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $room = room::all();
       return view("admin.rooms.index",compact("room"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cinemas = cinema::all();
        return view("admin.rooms.create",compact("cinemas"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $max = $request->input("max");
        $cinema_id = $request->input("cinema_id");
$data = [
    "name"=>$name,
    "max"=>$max,
    "cinema_id"=>$cinema_id,
];
room::create($data);
return redirect()->route('rooms.index')->with('success', 'Room created successfully');
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
       $room = room::find($id);
       $cinema = cinema::all();
       return view("admin.rooms.edit",compact("room","cinema"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $room = room::find($id);
        $name = $request->input("name");
        $max = $request->input("max");
        $cinema_id = $request->input("cinema_id");
$data = [
    "name"=>$name,
    "max"=>$max,
    "cinema_id"=>$cinema_id,
];
$room->update($data);
return redirect()->route('rooms.index')->with('success', 'Room Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $room = room::find($id);
        if (!$id) {
return redirect()->back()->with('error', 'Food not found');
        }
        $room->delete();
return redirect()->route('rooms.index')->with('success', 'Room Update successfully');

    }
}
