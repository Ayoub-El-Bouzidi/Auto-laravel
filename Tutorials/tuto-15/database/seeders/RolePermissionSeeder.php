<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'editor']);

        Permission::create(['name' => 'view dashboard']);
        Permission::create(['name' => 'edit articles']);

        Role::findByName('admin')->givePermissionTo(Permission::all());
        Role::findByName('editor')->givePermissionTo(['view dashboard', 'edit articles']);
    }
}
