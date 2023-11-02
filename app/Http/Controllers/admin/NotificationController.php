<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickit = ticket::all();
        return view("admin.tickits.index", compact("tickit"));
        $Notification = Notification::get();
        // $user_id = $Notification->user_id;
        // $email = DB::table("users")->where("id", $user_id)->value("email");
        return view("admin.Notification.index", compact('Notification'));
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
        return view("admin.tickits.tickitbill", compact("tickit"));
        //
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
        //    }
    }
}
