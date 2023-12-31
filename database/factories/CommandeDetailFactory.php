<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\commande_detail>
 */
class CommandeDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(5, true),
            'body' => $this->faker->sentence(45),
            'likes' => $this->faker->randomNumber(5),
            'author' => $this->faker->name(),
            'draft' => $this->faker->boolean()
        ];
    }
}
