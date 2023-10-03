<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClubsEsportiu;
use App\Models\Lliga;
use App\Models\Equip;
use App\Models\Entrenador;
use App\Models\User;
use App\Models\Jugador;
use App\Models\Partit;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        
        ClubsEsportiu::factory(5)->create();
        
        Lliga::factory(3)->create();
        
        Equip::factory(10)->create();
        
        Entrenador::factory(10)->create();
        
        Jugador::factory(50)->create();
        
        Partit::factory(10)->create();
        
        $this->call(UsersSeeder::class);
    }
}




