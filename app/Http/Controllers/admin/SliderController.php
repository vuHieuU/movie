<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\SliderFormRequest;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::orderByDESC("created_at")->get();
        return view("admin.sliders.index",compact("sliders"));
    }

    public function create(){
        return view("admin.sliders.create");
    }

    public function store(SliderFormRequest $request){

        $validatedData = $request->validated();

        if($request->hasFile('image')){
            $file = $request->file("image");
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move("uploads/slider",$filename);

            $validatedData["image"] = "uploads/slider/$filename";
        }

        $validatedData["status"] = $request->status == true ? "1" : "2";

        Slider::create([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'image' => $validatedData["image"],
            'status' => $validatedData["status"],
            'position' => $request->input("position"),
        ]);

        return redirect("sliders/index")->with("message","Thêm Slider thành công!");
    }

    public function edit($id){
        $slider = Slider::findOrFail($id);
        return view("admin.sliders.edit",compact("slider"));
    }

    public function update(SliderFormRequest $request,$id){

        $slider = Slider::findOrFail($id);

        
        $validatedData = $request->validated();

        if($request->hasFile('image')){

            $destination = $slider->image;

            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file("image");
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move("uploads/slider",$filename);

            $validatedData["image"] = "uploads/slider/$filename";
        }else{
            $validatedData["image"] = $slider->image;
        }

        $validatedData["status"] = $request->status == true ? "1" : "2";

        Slider::where("id",$slider->id)->update([
            'title' => $request->input("title"),
            'description' => $request->input("description"),
            'image' => $validatedData["image"],
            'status' => $validatedData["status"],
            'position' => $request->input("position"),
        ]);

        return redirect("sliders/index")->with("message","Cập nhật Slider thành công!");
    }

    public function destroy($id){
        $slider = Slider::findOrFail($id);


        if($slider->count() > 0){
            $destination = $slider->image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $slider->delete();
            return redirect("sliders/index")->with("message","Xóa Slider thành công!");
        }
        return redirect("sliders/index")->with("message","Có lỗi xảy ra");
    }
}
