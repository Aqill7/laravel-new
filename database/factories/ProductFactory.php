<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->word,
            'slug' => $this->faker->unique()->slug,
            'price_per_day' => $this->faker->randomFloat(2, 10000, 100000),
            'stock' => 10,
        ];
    }
}
