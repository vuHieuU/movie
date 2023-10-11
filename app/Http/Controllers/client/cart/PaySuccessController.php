<?php

namespace App\Http\Controllers\client\cart;
use App\Models\ticket;
use App\Http\Controllers\Controller;
class PaySuccessController extends Controller
{
    public function show(string $id)
    {
        $title = 'payment success';
        $ticket = ticket::findOrFail($id);
        return view('client.layout.cart.Payment_success',compact('title','ticket'));
    }

}
