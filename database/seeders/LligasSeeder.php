<?php

 namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use App\Models\Lliga;

 class LligasSeeder extends Seeder
 {
     
     public function run(): void
     {
         Lliga::create([
             'nom' => 'Liga Catalana',
             'temporada' => '2023-2024',
         ]);

         Lliga::create([
             'nom' => 'Premier League',
             'temporada' => '2023-2024',
         ]);

         Lliga::create([
             'nom' => 'Kings League',
             'temporada' => '2023-2024',
         ]);
     }
 }
