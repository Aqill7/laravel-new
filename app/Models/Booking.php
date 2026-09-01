<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['booking_code', 'customer_name', 'customer_phone', 'customer_address', 'rental_date', 'return_date', 'actual_return_date', 'total_price', 'status', 'payment_status'];

    protected $casts = [
        'rental_date' => 'datetime',
        'return_date' => 'datetime',
        'actual_return_date' => 'datetime',
    ];

    public function items()
    {
        return $this->hasMany(BookingItem::class);
    }

    public function fines()
    {
        return $this->hasMany(Fine::class);
    }
}
