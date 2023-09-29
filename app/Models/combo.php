<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class combo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'size',
    ];
    public function foods()
    {
        return $this->belongsToMany(food::class,'combo_foods','combo_id','food_id');
    }
}
