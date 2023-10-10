<?php

 namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use App\Models\Jugador;

 class JugadorsSeeder extends Seeder
 {

     public function run(): void
     {
         Jugador::create([
             'nom' => 'Lionel Messi',
             'edat' => 15,
             'num' => 10,
             'posicio' => 'Davanter',
             'equip_id' => 1,
         ]);

     }
 }
