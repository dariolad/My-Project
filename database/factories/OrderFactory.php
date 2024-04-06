<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => $this->faker->ean13(),
            'user_id' => $this->faker->ean8(),
            'total' => $this->faker->randomDigit(),
            'order_status' => 'shipped',
            'shipping_address' => 'via da qui',
            'order_date' => $this->faker->dateTime(),
            'update_order_date' => $this->faker->dateTime(),
            'products_details' => $this->faker->word(),
        ];
    }
}
