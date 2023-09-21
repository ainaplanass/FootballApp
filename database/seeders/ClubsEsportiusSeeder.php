<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClubsEsportiu;
class ClubsEsportiusSeeder extends Seeder
{
    public function run(): void
    {
        ClubsEsportiu::create([
            'nom' => 'Escola Barcelona',
        ]);

        ClubsEsportiu::create([
            'nom' => 'Escola Real Madrid',
        ]);

        ClubsEsportiu::create([
            'nom' => 'Escola Atlético Madrid',
        ]);
    }
}
