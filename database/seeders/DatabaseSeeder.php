<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ClubsEsportiusSeeder::class);
        $this->call(EquipsSeeder::class);
        $this->call(JugadorsSeeder::class);
        $this->call(EntrenadorsSeeder::class);
        $this->call(LligasSeeder::class);
        $this->call(PartitsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
