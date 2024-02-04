<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = [
            'role-view',
            'role-create',
            'role-edit',
            'role-delete',
            'user-view',
            'user-create',
            'user-edit',
            'user-delete',
            'post-view',
            'post-create',
            'post-edit',
            'post-delete',
        ];

        foreach ($permission as $value) {
            Permission::create(['name' => $value]);
        }
    }
}
