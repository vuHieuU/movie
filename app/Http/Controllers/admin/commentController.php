<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;


class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */



     public function store(Request $request)
     {

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
    
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

    }
    /**
     * Remove the specified resource from storage.
     */
    public function hidden($id)
    {
        $comment = comment::findOrFail($id);
        $data['status'] = 1;

        if (!$id) {
            return redirect()->back()->with('error', 'Comment not found');
        }
            $comment->update($data);
        return redirect()->route('comment.index')->with('success', 'Comment update successfully');
    }

    public function restore($id)
    {
        $comment = comment::findOrFail($id);

        $data['status'] = 0;

        if (!$id) {
            return redirect()->back()->with('error', 'Comment not found');
        }
            $comment->update($data);
        return redirect()->route('comment.index')->with('success', 'Comment update successfully');
    }
}
