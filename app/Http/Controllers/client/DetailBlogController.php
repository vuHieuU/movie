<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class DetailBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Detail Blog";
        $new_footer  = News::orderByDesc("created_at")->limit(2)->get();
        return view('client.DetailBlog',compact('title',"new_footer"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $blog_slug)
    {
        $title = "Detail Blog";
        $detailblog = News::where('slug', $blog_slug)->firstOrFail();
        $blogs  = News::where('status','1')->where('slug','!=',$blog_slug)->orderByDesc("created_at")->limit(3)->get();
        return view('client.DetailBlog',compact('title',"detailblog",'blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
