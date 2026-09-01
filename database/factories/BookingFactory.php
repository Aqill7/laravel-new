<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_code' => $this->faker->unique()->bothify('BK-####'),
            'customer_name' => $this->faker->name,
            'customer_phone' => $this->faker->phoneNumber,
            'customer_address' => $this->faker->address,
            'rental_date' => now(),
            'return_date' => now()->addDays(3),
            'total_price' => 100000,
        ];
    }
}
