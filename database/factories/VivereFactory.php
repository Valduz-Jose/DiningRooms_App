<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vivere>
 */
class VivereFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 100),
            'unidad_medida' => $this->faker->randomElement(['Kilos', 'Litros', 'Cartones', 'Unidades']),
            'ubicacion' => $this->faker->randomElement(['bramon', 'palmita', '5patio']),
        ];
    }
}
