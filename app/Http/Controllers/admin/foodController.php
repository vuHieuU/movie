<?php

namespace App\Http\Controllers\admin;

use App\Models\food;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\FoodRequest;


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
        // $thumb = $request->file('thumb')->getClientOriginalName();
        // $request->file('thumb')->storeAs('public/images',$thumb);
         $data = [
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'status' => $request->status,
            'content' => $request->content,
         ];
         if($request->hasFile('thumb')){
            $file = $request->file("thumb");
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move("uploads/images",$filename);

            $data["thumb"] = "uploads/images/$filename";
        }
         food::create($data);


        return redirect()->route('food.index')->with('success', 'Food created successfully');
     }
     
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $food = food::findOrFail($id);
        return view('admin.foods.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $food = food::findOrFail($id);
        return view('admin.foods.edit', compact('food'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(FoodRequest $request, $id)
    {
        $food = food::findOrFail($id);
         $dataupdate = [
            'name' => $request->name,
            'qty' => $request->qty,
            'price' => $request->price,
            'status' => $request->status,
            'content' => $request->content,
         ];
        //  if($request->file('thumb') !== null){
        //     $thumb = $request->file('thumb')->getClientOriginalName();
        //     $request->file('thumb')->storeAs('public/images', $thumb);
        //     $dataupdate['thumb'] = $thumb;
        //     }
            if($request->hasFile('thumb')){

                $destination = $food->image;
    
                if(File::exists($destination)){
                    File::delete($destination);
                }
    
                $file = $request->file("thumb");
                $ext = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move("uploads/images",$filename);
    
                $dataupdate["thumb"] = "uploads/images/$filename";
            }else{
                $dataupdate["thumb"] = $food->image;
            }
         $food->update($dataupdate);

        return redirect()->route('food.index')->with('success', 'Food updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $food = food::findOrFail($id);
    
        if (!$id) {
            return redirect()->back()->with('error', 'Food not found');
        }
            $food->delete();
        return redirect()->route('food.index')->with('success', 'Food deleted successfully');
    }
}
