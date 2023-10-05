<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'entrenador']);

        $permission1 = Permission::create(['name' => 'teams.store']);
        $permission2 = Permission::create(['name' => 'teams.destroy']);
        $permission3 = Permission::create(['name' => 'teams.update']);;
        $permission4 = Permission::create(['name' => 'players.update']);
        $permission5 = Permission::create(['name' => 'players.destroy']);
        $permission6 = Permission::create(['name' => 'players.store']);
        $permission7 = Permission::create(['name' => 'trainers.destroy']);
        $permission8 = Permission::create(['name' => 'trainers.store']);
        $permission9 = Permission::create(['name' => 'matches.destroy']);
        $permission10 = Permission::create(['name' => 'matches.store']);
        $permission11 = Permission::create(['name' => 'matches.update']);
        $permission11 = Permission::create(['name' => 'roles.update']);

        
        $coachPermisions = [
            'players.update',
            'players.destroy',
            'players.store',
            'trainers.destroy',
            'trainers.store',
            'matches.destroy',
            'matches.store',
            'matches.update'];

            $role1 = Role::findByName('admin');
            $role2 = Role::findByName('entrenador');
            
            $role1->syncPermissions(Permission::all());
            
            $role2->syncPermissions($coachPermisions);
    }

}

