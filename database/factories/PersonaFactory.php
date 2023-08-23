<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = $this->faker->randomElement(['male', 'female']); // Determina el género aleatorio
        $photoUrl = "https://randomuser.me/api/portraits/{$gender}/" . $this->faker->numberBetween(1, 99) . ".jpg";

        return [
            'name' => $this->faker->name,
            'edad' => $this->faker->numberBetween(18, 65),
            'sexo' => $this->faker->randomElement(['M', 'F']),
            'fecha_nacimiento' => $this->faker->date,
            'ubicacion' => $this->faker->randomElement(['bramon', 'palmita', '5patio']),
            'foto' => $this->faker->name,
        ];
    }
}
