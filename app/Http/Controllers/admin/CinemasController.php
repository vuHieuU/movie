<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\cinema;
use App\Models\city;
use Illuminate\Http\Request;

class CinemasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cinemas = cinema::get();
        return view("admin.cinemas.index",compact("cinemas"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $city = city::get();
        return view("admin.cinemas.create",compact("city"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $description = $request->input("description");
        $address = $request->input("address");
        $city= $request->input("city");
        $data = [
            "name"=>$name,
            "description"=>$description,
            "address"=>$address,
            "city"=>$city,
        ];
        cinema::create($data);
        return redirect("/cinemas/index");
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
        $cinemas = cinema::find($id);
        $city = city::get();
        return view("admin.cinemas.edit",compact("cinemas","city"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cinemas= cinema::find($id);
        $name = $request->input("name");
        $description = $request->input("description");
        $address = $request->input("address");
        $city_id = $request->input("city");
        $data = [
            "name"=>$name,
            "description"=>$description,
            "address"=>$address,
            "city_id"=>$city_id,
        ];
        $cinemas->update($data);
        return redirect("/cinemas/index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cinemas= cinema::find($id);
        $cinemas->delete($cinemas);
        return redirect("/cinemas/index");
    }
}
