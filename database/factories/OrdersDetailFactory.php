<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => $this->faker->numberBetween(2, 51),
            'product_id' => $this->faker->numberBetween(1, 50),
            'quality' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(),
            'method_pay_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
