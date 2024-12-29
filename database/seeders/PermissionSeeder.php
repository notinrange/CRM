<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // if (!Permission::where('name', 'manage_users')->where('guard_name', 'web')->exists()) {
        //     Permission::create(['name' => 'manage_users', 'guard_name' => 'web']);
        // }

        Permission::create(['name' => 'manage_users']);
        Permission::create(['name' => 'delete_clients']);
        Permission::create(['name' => 'delete_projects']);
        Permission::create(['name' => 'delete_tasks']);
        $role = Role::findByName('admin');
        $role->givePermissionTo([
            'manage_users',
            'delete_clients',
            'delete_projects',
            'delete_tasks'
        ]);
    }
}
