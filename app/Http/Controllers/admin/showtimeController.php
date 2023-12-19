<?php

namespace App\Http\Controllers\admin;

use App\Models\film;
use App\Models\room;
use App\Models\seats;
use App\Models\cinema;
use App\Models\ShowTime;
use App\Models\showtime_seat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class showtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtime = ShowTime::with('cinema')->orderByDesc("day")->get();
        return view('admin.showtime.index',compact('showtime'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $film = film::get();
        $room = room::get();
        $f96 = [];
        $count = 0;
        for($i = 0; $i < 8; $i++)
        $f96_1 = seats::offset(0)->limit(12)->get();
        $f96_2 = seats::offset(12)->limit(10)->get();
        $f96_3 = seats::offset(24)->limit(12)->get();
        $f96_4 = seats::offset(36)->limit(10)->get();
        $f96_5 = seats::offset(48)->limit(12)->get();
        $f96_6 = seats::offset(60)->limit(10)->get();
        $f96_7 = seats::offset(72)->limit(12)->get();
        $f96_8 = seats::offset(84)->limit(10)->get();
        // ============
        $f2_1 = seats::offset(0)->limit(9)->get();
        $f2_2 = seats::offset(12)->limit(8)->get();
        $f2_3 = seats::offset(24)->limit(9)->get();
        $f2_4 = seats::offset(36)->limit(9)->get();
        $f2_5 = seats::offset(48)->limit(8)->get();
        $f2_6 = seats::offset(60)->limit(8)->get();
        $f2_7 = seats::offset(72)->limit(9)->get();
        $f2_8 = seats::offset(84)->limit(9)->get();
        $cinemas = cinema::all();
        return view('admin.showtime.create',compact('film','room','cinemas','f96_1','f96_2','f96_3','f96_4','f96_5','f96_6','f96_7','f96_8','f2_1','f2_2','f2_3','f2_4','f2_5','f2_6','f2_7','f2_8'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'film_id' => $request->film_id,
            'room_id' => '3',
            'cinema_id' => $request->cinema_id,
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
        $seats = seats::orderBy('id', 'asc')->get();
        $cinema = cinema::get();
        return view('admin.showtime.edit',compact('showtime','film','room','seats','cinema'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $showtime = ShowTime::FindOrFail($id);
        $data = [
            'film_id' => $request->film_id,
            'room_id' => '3',
            'cinema_id' => $request->cinema_id,
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
        showtime_seat::where('showtime_id',$showtime->id)->delete();
        $showtime->delete($id);
        return redirect('/showtime/index');
    }
}
