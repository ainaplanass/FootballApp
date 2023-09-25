<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lliga>
 */
class LligaFactory extends Factory
{ /**
    * Define the model's default state.
    *
    * @return array
    */
   public function definition()
   {
       return [
           'nom' => $this->faker->word,
           'temporada' => $this->faker->year,
       ];
   }
}
