<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'showtime_id',
        'film_name',
        'selected_date',
        'selected_hour',
        'selected_room',
        'selected_seats',
        'user_id',
        'buyer_name',
        'cinema',
        'film_id',
        'coupon_code',
        'total',
        'code',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Trong model Ticket
public function ticketFoods()
{
    return $this->hasMany(ticketFood::class, 'ticket_id', 'id');
}

}
