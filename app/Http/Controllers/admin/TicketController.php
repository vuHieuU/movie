<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\ticket;
use App\Models\ticketFood;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\club_point;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // $ticket = DB::table("tickets")
        //     ->join('ticket_food', 'tickets.id', '=', 'ticket_food.ticket_id')
        //     ->select('tickets.id', 'ticket_food.*', 'tickets.*', 'ticket_food.ticket_id')
        //     ->orderBy("tickets.created_at", "desc");

        $ticket = ticket::orderBy('id','desc');
    
        $filter = $request->input('type');
        if ($filter === 'tuan') {
            $ticket->whereBetween('tickets.created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            session(['export_filter' => 'tuan']);
        } elseif ($filter === 'thang') {
            $startDate = now()->subDays(30)->startOfDay();
            $endDate = now()->endOfDay();
            $ticket->whereBetween('tickets.created_at', [$startDate, $endDate]);
            session(['export_filter' => 'thang']);
        } elseif ($filter === 'nam') {
            $ticket->whereYear('tickets.created_at', now()->year);
            session(['export_filter' => 'nam']);
        }
    
        $tickets = $ticket->get();
        return view("admin.tickets.index", compact("tickets", "filter"));
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
            if($status==1) {
                $Notification->status = 2 ;
                $Notification->save();
                }
        $ticket = ticket::with('ticketFoods')->find($id);
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
        Notification::where('tickets_id',$ticket->id)->delete();
        ticketFood::where('ticket_id',$ticket->id)->delete();
        $ticket->delete();
        return redirect()->route("ticket.index")->with('success', 'tickit delete successfully');
    }
    public function updatePaymentStatus(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);
        $ticket->status = $request->input('status');
        $ticket->save();
        $point_user = User::findOrFail($ticket->user_id);
        $club_point = club_point::where('ticket_id', $ticket->id)->first();
    
        if ($club_point) {
            $order_point = $club_point->point;
            $point_user->point += $order_point;
            $point_user->save();
    
            $club_point->status = 1;
            $club_point->save();
        }
        return redirect()->back()->with('success', 'Payment status updated successfully');
    }
}
