<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'position' => $this->faker->numberBetween(1, 50),
            'admin_permission_id' => $this->faker->numberBetween(1, 50),
            'phone' => $this->faker->phoneNumber(),
        ];
    }
}
