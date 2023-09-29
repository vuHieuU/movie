<?php

namespace App\Http\Controllers\admin;

use App\Models\food;
use App\Models\combo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class comboController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $combos = combo::get();
        return view('admin.combo.index',compact('combos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $food = food::get();
        return view('admin.combo.create',compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'size' => $request->size,
         ];
         $combo = combo::create($data);
         $combo->foods()->attach($request->id_food);
        return redirect()->route('combo.index');
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
        $combo = combo::findOrFail($id);
        $foods = food::get();
        return view('admin.combo.edit',compact('combo','foods'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $combos = combo::findOrFail($id);
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'size' => $request->size,
         ];
         $combos->update($data);
         $combos->foods()->sync($request->id_food);
        return redirect()->route('combo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $combos = combo::findOrFail($id);
         $combos->delete($id);
        return redirect()->route('combo.index');
    }
}
