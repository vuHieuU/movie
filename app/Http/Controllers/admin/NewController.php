<?php

namespace App\Http\Controllers\admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class NewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $new = News::orderByDesc("created_at")->get();
        return view('admin.news.index',compact('new'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new News();
        $data->title = $request->input('title');
        $data->slug = Str::slug($request->input('title'));
        $data->content = $request->input('content');;
        $data->status = $request->input('status');

        $thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $request->file('thumbnail')->storeAs('public/images', $thumbnail);

        $data->thumbnail = $thumbnail;
        // if($request->hasFile('thumbnail')){
        //     $file = $request->file("thumbnail");
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move("uploads/blog",$filename);

        //     $data["thumbnail"] = "uploads/blog/$filename";
        // }

        $data->status = $request->status == true ? "1" : "0";

        $data->meta_title = $request->input('meta_title');;
        $data->meta_keyword = $request->input('meta_keyword');
        $data->meta_description = $request->input('meta_description');
      
        $data->save();

        // dd($data);

        return redirect()->route('news.index')->with('success', 'Thêm tin thành công');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $new = News::find($id);
        return view('admin.news.show', compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $new = News::find($id);
        return view('admin.news.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $data = News::find($id);

        $data->title = $request->input('title');
        $data->content = $request->input('content');;
        $data->slug = Str::slug($request->input('title'));
        $data->status = $request->status == true ? "1" : "0";
        
        if ($request->file('thumbnail') !== null) {
            $thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $request->file('thumbnail')->storeAs('public/images', $thumbnail);

            $oldThumb = $data->thumbnail;
            
            Storage::delete('public/images/'.$oldThumb);

            $data->fill([
                'thumbnail' => $thumbnail,
            ])->save();
        }
        // if($request->hasFile('thumbnail')){

        //     $destination = $data->image;

        //     if(File::exists($destination)){
        //         File::delete($destination);
        //     }

        //     $file = $request->file("thumbnail");
        //     $ext = $file->getClientOriginalExtension();
        //     $filename = time().'.'.$ext;
        //     $file->move("uploads/blog",$filename);

        //     $data["thumbnail"] = "uploads/blog/$filename";
        // }else{
        //     $data["thumbnail"] = $data->image;
        // }

        $data->meta_title = $request->input('meta_title');;
        $data->meta_keyword = $request->input('meta_keyword');
        $data->meta_description = $request->input('meta_description');
        
        $data->save();

        return redirect()->route('news.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $data = News::find($id);
    
        if (!$data) {
            return redirect()->back()->with('error', 'Không tìm thấy');
        }
            $data->delete();
        return redirect()->route('news.index')->with('success', 'Xóa thành công');
    }
}
