<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugador>
 */
class JugadorFactory extends Factory
{
  /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'edat' => $this->faker->numberBetween(18, 35),
            'num' => $this->faker->numberBetween(1, 99),
            'posició' => $this->faker->randomElement(['Davanter', 'Centrecampista', 'Defensa', 'Porter']),
            'equip_id' =>  \App\Models\Equip::factory(),
        ];
    }
}
