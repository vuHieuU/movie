<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'thumbnail',
        'slug',
        'content',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];
}
