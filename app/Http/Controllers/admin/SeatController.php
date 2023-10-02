<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\seat;
use App\Models\seats;
use App\Models\typeseats;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seat_number = seats::get();
        $typeseat = typeseats::get();

        return view("admin.seats.index",compact("seat_number","typeseat"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $typeseat = typeseats::get();
        return view("admin.seats.create",compact("typeseat"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $seat_number = $request->input("seat_number");
       $typeSeat_id = $request->input("typeSeat_id");

       $data = [
        "seat_number" => $seat_number,
        "typeSeat_id" => $typeSeat_id
       ];
       seats::create($data);
       
       return redirect()->route("seats.index")->with('success', 'Seat created successfully');
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
        $typeseat = typeseats::all();
       $seat_number =seats::find($id);
       return view('admin.seats.edit',compact("seat_number","typeseat"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $seat =seats::find($id);
        $seat_number = $request->input("seat_number");
       $typeSeat_id = $request->input("typeSeat_id");

        $data = [
         "seat_number" => $seat_number,
         "typeSeat_id" => $typeSeat_id
        ];
        $seat->update($data);
        return redirect()->route("seats.index")->with('success', 'Seat update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seat =seats::find($id);
        if (!$id) {
            return redirect()->back()->with('error', 'Food not found');
        }
        $seat->delete();
        return redirect()->route("seats.index")->with('success', 'Seat delete successfully');

    }
}
