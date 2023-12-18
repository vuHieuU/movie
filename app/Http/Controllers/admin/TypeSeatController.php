<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\seat;
use App\Models\seats;
use App\Models\typeseats;
use Illuminate\Http\Request;

class TypeSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $typeseat = typeseats::get();
        $seat_number = seats::get();
     
        
       return view("admin.typeseats.index",[
        "typeseat"=>$typeseat,
        "seat_number"=>$seat_number,
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view("admin.typeseats.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $name =$request->input("name");
       $price =$request->input("price");
     
$data =[
    "name"=>$name ,
    "price"=> $price,
   

];
typeseats::create($data);
return redirect()->route("typeseats.index")->with('success', 'Seat update successfully');
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
        $typeseat = typeseats::find($id);
        $seat_number = seats::get();
        
       return view("admin.typeseats.edit",[
        "typeseat"=>$typeseat,
        "seat_number"=>$seat_number,
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $typeseat = typeseats::find($id);
        $name =$request->input("name");
        $price =$request->input("price");
      
 $data =[
     "name"=>$name ,
     "price"=> $price,
 ];
 $typeseat->update($data);
return redirect()->route("typeseats.index")->with('success', 'Seat update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $typeseat = typeseats::findOrFail($id);
    
        if (!$id) {
            return redirect()->back()->with('error', 'TypeSeat not found');
        }
            $typeseat->delete();
        return redirect()->route('typeseats.index')->with('success', 'TypeSeat deleted successfully');
    }
}
