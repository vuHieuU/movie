<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'value',
        'expiry_date',
    ];
    public function rank()
    {
        return $this->belongsTo(rank::class, 'rank_id', 'id');
    }
}
