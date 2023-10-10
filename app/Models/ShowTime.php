<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTime extends Model
{
    use HasFactory;
    protected $fillable = [
        'film_id',
        'room_id',
        'cinema_id',
        'hour',
        'day',
        'isActive',
    ];
    public function seats()
    {
        return $this->belongsToMany(seats::class,'showtime_seats', 'showtime_id', 'seat_id');
    }
    public function cinema()
    {
        return $this->belongsTo(cinema::class);
    }
    public function room()
    {
        return $this->belongsTo(room::class);
    }
    public function film()
{
    return $this->belongsTo(film::class);
}
}
