<?php

   namespace Database\Seeders;

   use Illuminate\Database\Console\Seeds\WithoutModelEvents;
   use Illuminate\Database\Seeder;
   use App\Models\User;

   class UsersSeeder extends Seeder
   {

       public function run(): void
       {
               User::create([
                   'name' => 'Aina Planas',
                   'email' => 'ainetap@example.com',
                   'password' => bcrypt('ainaainaaina'),
                   'equip_id' => 1, 
               ])->assignRole('admin');
    
               User::factory(80)->create();
       }
   }
