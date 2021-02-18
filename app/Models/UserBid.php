<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserBid extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'session_id',
        'high_or_low',
        'amount',
        'auto_close_time',
        'user_bid',
        'closing_bid',
        'profit'
    ];
}
