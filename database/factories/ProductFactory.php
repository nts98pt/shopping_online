<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'status' => $this->faker->randomNumber(),
            'code_product' => $this->faker->text,
            'description' => $this->faker->text(),
            'image' => $this->faker->image(),
            'price' => $this->faker->numberBetween(100, 1000),
            'selling_price' => $this->faker->numberBetween(1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
