<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo_food extends Model
{
    use HasFactory;
    protected $fillable = [
        'combo_id',
        'food_id',
        'isActive',
    ];
}
