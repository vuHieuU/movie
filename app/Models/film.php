<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'description',
        'thumb',
        'director',
        'actor',
        'language',
        'premiere_date',
        'country',
        'trailer',
        'status',
    ];
}
