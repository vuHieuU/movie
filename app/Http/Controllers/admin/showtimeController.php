<?php

namespace App\Http\Controllers\admin;

use App\Models\film;
use App\Models\room;
use App\Models\seats;
use Illuminate\Http\Request;
use App\Models\ShowTime;
use App\Http\Controllers\Controller;

class showtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtime = ShowTime::get();
        return view('admin.showtime.index',compact('showtime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = film::get();
        $room = room::get();
        $seats = seats::get();
        return view('admin.showtime.create',compact('film','room','seats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'film_id' => $request->film_id,
            'room_id' => $request->room_id,
            'hour' => $request->hour,
            'day' => $request->day,
            'content' => $request->content,
        ];
        $showtime = ShowTime::create($data);
        $showtime->seats()->attach($request->id_seat);
        return redirect('/showtime/index');
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
        $showtime = ShowTime::FindOrFail($id);
        $film = film::get();
        $room = room::get();
        $seats = seats::get();
        return view('admin.showtime.edit',compact('showtime','film','room','seats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $showtime = ShowTime::FindOrFail($id);
        $data = [
            'film_id' => $request->film_id,
            'room_id' => $request->room_id,
            'hour' => $request->hour,
            'day' => $request->day,
            'content' => $request->content,
        ];
        $showtime->update($data);
        $showtime->seats()->sync($request->id_seat);
        return redirect('/showtime/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $showtime = ShowTime::FindOrFail($id);
        $showtime->delete($id);
        return redirect('/showtime/index');
    }
}
