<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equip>
 */
class EquipFactory extends Factory
{
  /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->unique()->word,
            'clubs_esportius_id' => function () {
                return \App\Models\ClubsEsportiu::factory()->create()->id;}
        ];
    }
}
