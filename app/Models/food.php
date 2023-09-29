<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'thumb', 'price', 'status'];
    public function combos()
    {
        return $this->belongsToMany(combo::class,'combo_foods','combo_id','food_id');
    }
}
