<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->name(),
            'province'=>fake()->state(),
            'ville'=>fake()->city(),
            'commune'=>fake()->citySuffix(),
            'adresse'=>fake()->address(),
            'path_img'=>fake()->imageUrl(640, 480),
            'price'=>fake()->randomFloat(2,10,1000),
            'boite_mail'=>fake()->unique()->safeEmail(),

        ];
    }
}
