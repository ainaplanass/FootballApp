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
        'resultat' => $this->faker->randomElement(['Victoria', 'Empat', 'Derrota']),
        'data' => $this->faker->date(),
        'temps' => $this->faker->time(),
        'estadi' => $this->faker->word,
        'equipLocal_id' => \App\Models\Equip::factory(),
        'equipVisitant_id'=> \App\Models\Equip::factory(),
        'lliga_id' => \App\Models\Lliga::factory(),
    ];
    
    
   }
}
