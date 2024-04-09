<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
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
            'product_id' => $this->faker->ean13(),
            'product_name' => $this->faker->word(),
            'product_price' => $this->faker->ean8(),
            'product_quantity' => $this->faker->randomDigit(),
            'product_status' => 'available',
        ];
    }
}
