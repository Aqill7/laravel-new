<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    protected $fillable = ['booking_id', 'days_late', 'amount', 'status'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
