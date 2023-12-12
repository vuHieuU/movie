<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\rank;
use Illuminate\Http\Request;

class rankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rank = rank::get();
        return view('admin.rank.index',compact('rank'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.rank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rank = new rank;
        $rank->name = $request->name;
        $rank->minium_score = $request->minium_score;
        $rank->save();
        return redirect()->route('rank.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rank = rank::findOrFail($id);
        return view('admin.rank.edit',compact('rank'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rank = rank::findOrFail($id);
        $data = [
            'name' => $request->name,
            'minium_score' => $request->minium_score,
        ];
        $rank->update($data);
        return redirect()->route('rank.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rank = rank::findOrFail($id);
        $rank->delete($id);
        return redirect()->route('rank.index');
    }
}
