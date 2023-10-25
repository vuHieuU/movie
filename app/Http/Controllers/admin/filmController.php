<?php

namespace App\Http\Controllers\admin;

use App\Models\film;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\admin\filmsRequest;
use App\Http\Requests\admin\filmUpdateRequest;

class filmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $film = film::get();
        return view('admin.films.index', compact('film'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cate = category::get();
        return view('admin.films.create', compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(filmsRequest $request)
    {
        $data = new film();
        $data->name = $request->input('name');
        $data->duration = $request->input('duration');
        $data->description = $request->input('description');
        $data->director = $request->input('director');
        $data->actor = $request->input('actor');
        $data->language = $request->input('language');
        $data->country = $request->input('country');
        $data->trailer = $request->input('trailer');
        $data->status = $request->input('status');

        $thumb = $request->file('thumb')->getClientOriginalName();
        $request->file('thumb')->storeAs('public/images', $thumb);

        $data->thumb = $thumb;

        $data->premiere_date = $request->input('premiere_date');

        $data->save();
        $data->categories()->attach($request->id_cate);
        return redirect()->route('films.index')->with('success', 'Thêm phim thành công');
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
        $film = film::find($id);
        $cate = category::get();
        return view('admin.films.edit', compact('film', 'cate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(filmUpdateRequest $request, string $id, film $film)
    {
        $data = film::find($id);

        $data->name = $request->input('name');
        $data->duration = $request->input('duration');
        $data->description = $request->input('description');
        $data->director = $request->input('director');
        $data->actor = $request->input('actor');
        $data->language = $request->input('language');
        $data->country = $request->input('country');
        $data->trailer = $request->input('trailer');
        $data->status = $request->input('status');
        $data->premiere_date = $request->input('premiere_date');

        if ($request->file('thumb') !== null) {
            $thumb = $request->file('thumb')->getClientOriginalName();
            $request->file('thumb')->storeAs('public/images', $thumb);

            $oldThumb = $data->thumb;

            Storage::delete('public/images/' . $oldThumb);

            $data->fill([
                'thumb' => $thumb,
            ])->save();
        }

        $data->save();
        $data->categories()->sync($request->id_cate);

        return redirect()->route('films.index')->with('success', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = film::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Không tìm thấy');
        }
        $data->delete();
        return redirect()->route('films.index')->with('success', 'Xóa thành công');
    }
}
