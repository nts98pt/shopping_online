<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'uuid' => $this->faker->uuid,
            'source' => $this->faker->text,
            'avatar' => $this->faker->image,
            'admin_role_id' =>$this->faker->numberBetween(30,50) ,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => $this->faker->time,
            'password' => $this->faker->password,
            'remember_token' => Str::random(10)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
