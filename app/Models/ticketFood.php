<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticketFood extends Model
{
    use HasFactory;
    protected $fillable = [
        'ticket_id',
        'name',
        'quantity',
    ];
}
