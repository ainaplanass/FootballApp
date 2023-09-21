<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jugador;

class JugadorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jugador::create([
            'nom' => 'Lionel Messi',
            'edat' => 15,
            'num' => 10,
            'posició' => 'Davanter',
            'equip_id' => 1,
        ]);

        Jugador::create([
            'nom' => 'Cristiano Ronaldo',
            'edat' => 18,
            'num' => 7,
            'posició' => 'Davanter',
            'equip_id' => 2,
        ]);

        Jugador::create([
            'nom' => 'Antoine Griezmann',
            'edat' => 10,
            'num' => 7,
            'posició' => 'Davanter',
            'equip_id' => 3,
        ]);
    }
}
