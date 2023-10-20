<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
    ];
    public function films()
    {
        return $this->belongsToMany(film::class,'film_categories', 'film_id', 'dmid');
    }
}
