<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chambre>
 */
class ChambreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categorie' => fake()->name(),
            'prix'=> fake()->randomFloat(2, 10, 100),
            'path_img'=>fake()->imageUrl(640, 480),
            'is_active'=>fake()->boolean(),
        ];
    }
}
