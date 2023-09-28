<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city = city::get();
        return view("admin.city.index",compact("city"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.city.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name = $request->input("name");
        $data = [
            'name'=>$name,
        ];
        city::create($data);
        return redirect("/city");
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
        $city = city::find($id);
        return view("admin/city.edit",compact("city"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $city = city::find($id);
        $name = $request->input("name");
        $data = [
            'name'=>$name,
        ];
        $city->update($data);
        return redirect("/city");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = city::find($id);
        $city->delete($city);
        return redirect('/city');
    }
}
