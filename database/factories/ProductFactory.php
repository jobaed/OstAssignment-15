<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'        => fake()->sentence(),
            'price'       => fake()->randomFloat( 2, 1, 1000 ),
            'quantity'    => fake()->randomNumber(),
            'category'    => fake()->name(),
            'description' => fake()->text(),
        ];
    }
}
