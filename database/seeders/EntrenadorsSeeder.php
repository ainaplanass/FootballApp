<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Entrenador;

class EntrenadorsSeeder extends Seeder
{
 
    public function run(): void
    {
        Entrenador::create([
            'nom' => 'Pep Guardiola',
            'equip_id' => 1,
        ]);

        Entrenador::create([
            'nom' => 'Zinedine Zidane',
            'equip_id' => 2,
        ]);

        Entrenador::create([
            'nom' => 'Diego Simeone',
            'equip_id' => 3,
        ]);
    }
}
