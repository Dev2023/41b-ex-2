<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'auteur_id' => fake()->numberBetween(1, 128),
            'titre' => fake()->text(),
            'date_pub' => fake()->date(),
            'resume' => fake()->text(1024),
        ];
    }
}
