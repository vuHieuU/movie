<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\food;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\Admin\FoodRequest;
use Illuminate\Support\Facades\Storage;


class foodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = food::all();
        return view('admin.foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.foods.create');
    }

    /**
     * Store a newly created resource in storage.
     */



     public function store(FoodRequest $request)
     {
        $params = $request->except('_token');
        $params['thumb'] = "";
        if ($request->hasFile('thumb') && $request->file('thumb')->isValid()) {
            $params['thumb'] = uploadFile('images',$request->file('thumb'));
        }
        $food = Food::create($params);

        return redirect()->route('food.index')->with('success', 'Food created successfully');
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
    public function edit($id)
    {
        $food = Food::find($id);
        return view('admin.foods.edit', compact('food'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodRequest $request, $id)
    {
        $food_old = Food::find($id);
        $params = $request->except('_token','_method');
        if (!$id) {
            return redirect()->back()->with('error', 'Food not found');
        }

        if ($request->hasFile('thumb') && $request->file('thumb')->isValid()) {
            $thumb_old = Storage::delete('/public/'.$food_old->thumb);
            $params['thumb'] = uploadFile('images',$request->file('thumb'));
        } else {
            $params['thumb'] = $food_old->thumb;
        }
        

        $food = Food::where('id',$id)
            ->update($params);

        return redirect()->route('food.index')->with('success', 'Food updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $food = Food::find($id);
    
        if (!$id) {
            return redirect()->back()->with('error', 'Food not found');
        }
            $food->delete();
        return redirect()->route('food.index')->with('success', 'Food deleted successfully');
    }
}
