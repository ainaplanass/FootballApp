<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equip;


class EquipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equip::create([
            'nom' => 'Institut Montserrat',
            'clubs_esportius_id' => 1,
            'logo_path' => 'images/logo/logo1.png',
        ]);
        
        Equip::create([
            'nom' => 'Escola Marta',
            'clubs_esportius_id' => 2,
            'logo_path' => 'images/logo/logo2.png',
        ]);
        
        Equip::create([
            'nom' => 'Escola Minions',
            'clubs_esportius_id' => 3,
            'logo_path' => 'images/logo/logo3.png',
        ]);
    }
}
