<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partit>
 */
class PartitFactory extends Factory
{ /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
    return [
        'resultat' => $this->faker->randomElement(['Victoria', 'Empate', 'Derrota']),
        'data' => $this->faker->date(),
        'temps' => $this->faker->time(),
        'estadi' => $this->faker->word,
        'equipLocal_id' => function () {
            return \App\Models\Equip::factory()->create()->id;
        },
        'equipVisitant_id' => function () {
            return \App\Models\Equip::factory()->create()->id;
        },
        'lliga_id' => function () {
            return \App\Models\Lliga::factory()->create()->id;
        },
    ];
    
    
   }
}
