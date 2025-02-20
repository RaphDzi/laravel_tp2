<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;
use App\Models\Vinyl;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vinyl>
 */
class VinylFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // insertion de faux vinyles pour tester la bdd et les relations
        return [
            'title' => fake()->sentence(),
            'release_year' => fake()->year(),
            'label' => fake()->word(),
            'artist_id' => Artist::factory(),
            'description' => fake()->text(),
        ];
    }
}
