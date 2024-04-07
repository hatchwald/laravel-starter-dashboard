<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = Role::create(['name' => 'SUPERADMIN']);
        $permissionAdmin = [];
        for ($i = 1; $i <= 14; $i++) {
            $permissionAdmin[] = $i;
        }
        $roles->syncPermissions($permissionAdmin);

        $user = Role::create(['name' => 'USER', 'guard_name' => 'web']);
        $permissionUser = [];
        for ($i = 9; $i <= 13; $i++) {
            $permissionUser[] = $i;
        }
        $user->syncPermissions($permissionUser);
    }
}
