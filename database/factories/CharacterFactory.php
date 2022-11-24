<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Character>
 */
class CharacterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $speciality = [
            'Guerrier', 'Mage', 'Druide', 'Assassin', 'Berseker', 'Archer'
        ];

        return [
            'name' => $this->faker->unique()->lastName(),
            'description' => $this->faker->text($maxNbChars=200),
            'speciality' => $this->faker->randomElement($speciality),
            'magic' => $this->faker->numberBetween(1, 14),
            'strength' => $this->faker->numberBetween(1, 14),
            'agility' => $this->faker->numberBetween(1,14),
            'intelligence' => $this->faker->numberBetween(1, 14),
            'lifepoint' => $this->faker->numberBetween(20, 50)
        ];
    }
}
