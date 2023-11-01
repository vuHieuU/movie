<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket = DB::table("tickets")
        ->join('ticket_food', 'tickets.id', '=', 'ticket_food.ticket_id')
        ->select('tickets.id', 'ticket_food.*','tickets.*','ticket_food.ticket_id')
        ->get();

        
        
        // $ticket = ticket::with("ticketFoods")->get();
        // dd($ticket);
        return view("admin.tickets.index", compact("ticket"));
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
        // $ticket = ticket::find($id);
        // $ticket = ticket::join('ticket_food', 'tickets.id', '=', 'ticket_food.ticket_id')
        //     ->select('tickets.*', 'ticket_food.*')
        //     ->where('tickets.id', $id)
        //     ->get();
        $status = Notification::where("tickets_id", $id)->value('status');
        $Notification = Notification::where('tickets_id', $id)->first();
        if($status){
            if($status==1) {
                $Notification->status = 2 ;
                $Notification->save();
                }
        }
        $ticket = ticket::with('ticketFoods')->find($id);

    //   dd($ticket);
        return view("admin.tickets.ticketbill", compact("ticket"));
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
