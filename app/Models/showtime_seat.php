<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class showtime_seat extends Model
{
    use HasFactory;
    protected $fillable = [
        'isFreeze',
        'user_id',
    ];
}
