<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = \App\Models\Order::class;

    public function definition()
    {
        return [
            'grand_total' => $this->faker->randomFloat(2, 50, 500),
            'shipping_cost' => $this->faker->randomFloat(2, 5, 20),
            'discount' => $this->faker->randomFloat(2, 0, 50),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
