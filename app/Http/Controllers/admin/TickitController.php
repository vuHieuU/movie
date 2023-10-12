<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ticket;
use Illuminate\Http\Request;

class TickitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickit = ticket::all();
        return view("admin.tickits.index",compact("tickit"));
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
    public function show(string $id)
    {
        $tickit = ticket::find($id);
        return view("admin.tickits.tickitbill",compact("tickit"));
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
      $ticket = ticket::find($id);
      $ticket->delete();
    return redirect()->route("ticket.index")->with('success', 'tickit delete successfully');
    }
}
