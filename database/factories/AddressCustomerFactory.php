<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressCustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 50),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber,
            'city' => $this->faker->city,
            'district' => $this->faker->text,
            'address_detail' => $this->faker->address,
        ];
    }
}
