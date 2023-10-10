<?php

 namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use App\Models\ClubsEsportiu;
 class ClubsEsportiusSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
        ClubsEsportiu::create([
            'nom' => 'Club Montserrat',
        ]);
        ClubsEsportiu::create([
            'nom' => 'Club Joan Guell',
        ]);
        ClubsEsportiu::create([
            'nom' => 'Villaroel',
        ]);
     }
 }
