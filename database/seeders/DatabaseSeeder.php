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
        $this->call(UsersSeeder::class);
        $this->call(ClubsEsportiusSeeder::class);
        $this->call(EntrenadorsSeeder::class);
        $this->call(EquipsSeeder::class);
        $this->call(JugadorsSeeder::class);
        $this->call(LligasSeeder::class);
        $this->call(PartitsSeeder::class);
    }
}




