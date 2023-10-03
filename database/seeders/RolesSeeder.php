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

        $permission1 = Permission::create(['name' => 'teams.store'])->syncRoles([$role1]);
        $permission2 = Permission::create(['name' => 'teams.destroy'])->syncRoles([$role1]);;
        $permission3 = Permission::create(['name' => 'teams.update'])->syncRoles([$role1,$role2]);;
        $permission4 = Permission::create(['name' => 'players.update'])->syncRoles([$role1,$role2]);
        $permission5 = Permission::create(['name' => 'players.destroy'])->syncRoles([$role1,$role2]);
        $permission6 = Permission::create(['name' => 'players.store'])->syncRoles([$role1,$role2]);
        $permission7 = Permission::create(['name' => 'trainers.destroy'])->syncRoles([$role1,$role2]);
        $permission8 = Permission::create(['name' => 'trainers.store'])->syncRoles([$role1,$role2]);
        $permission9 = Permission::create(['name' => 'matches.destroy'])->syncRoles([$role1,$role2]);
        $permission10 = Permission::create(['name' => 'matches.store'])->syncRoles([$role1,$role2]);
        $permission11 = Permission::create(['name' => 'matches.update'])->syncRoles([$role1,$role2]);
    }

}

