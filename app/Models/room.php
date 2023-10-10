<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'max',
        'cinema_id'
    ];
    public function ShowTimes()
    {
        return $this->hasMany(ShowTime::class);
    }
}
