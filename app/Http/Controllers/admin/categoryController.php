<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Http\Requests\Admin\CategoriesRequest;
use App\Models\film_category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cate = category::get();
        return view('admin.categories.index',compact('cate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoriesRequest $request)
    {
        $data = new category(); 
        $data->name = $request->input('name');
        // $data->status = $request->status == true ? "1" : "0";
        $data->save();
    
        return redirect()->route('categories.index')->with('success', 'Thêm thành công');
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
        $cate = category::find($id);

        return view('admin.categories.edit', compact('cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoriesRequest $request, string $id)
    {
        $data = category::find($id);
    
        $data->name = $request->input('name');
        // $data->status = $request->status == true ? "1" : "0";

        $data->save();
        
        return redirect()->route('categories.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
{
    $category = category::find($id);

    film_category::where('dmid',$category->id)->delete();
    $category->delete();

    return redirect()->route('categories.index')->with('success', 'Xóa thành công cùng với các liên kết.');
}
}
