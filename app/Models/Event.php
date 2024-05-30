<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'name',
        'description',
        'start',
        'end',
        'date',
        'vip_price',
        'sdj_price',
        'vvip_price',
        'svip_price',
        'svvip_price',
        's_price',
    ];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
