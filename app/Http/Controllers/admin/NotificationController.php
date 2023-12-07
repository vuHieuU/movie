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
        $Notification = Notification::join('users', 'notifications.users_id', '=', 'users.id')
            ->join('tickets', 'notifications.tickets_id', '=', 'tickets.id')
            ->select('users.*', 'tickets.*', 'notifications.*')
            ->orderBy('notifications.status', 'asc') // Sắp xếp theo status giảm dần
            ->orderBy('notifications.updated_at', 'desc') // Sắp xếp theo updated_at giảm dần
            ->get();
    
        return view("admin.notification.index", compact('Notification'));
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
