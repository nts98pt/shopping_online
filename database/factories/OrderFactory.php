<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_customer_id' => $this->faker->numberBetween(51, 100),
            'code_order' => $this->faker->postcode,
            'status' => $this->faker->randomNumber(),
        ];
    }
}
