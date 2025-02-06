<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
// use Laravel\Jetstream\Role;
// use Laravel\Jetstream\Rules\Role;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin Admin',
            'email' => 'admin@admin.com',
            'password' =>Hash::make('12345678') 
        ]);
        // Buat Role
        $adminRole = Role::create(['name' => 'admin']);
        $redaksiRole = Role::create(['name' => 'redaksi']);
        $kontributorRole = Role::create(['name' => 'kontributor']);

        // Buat Permission
        Permission::create([
            'name' => 'manage_admin',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'manage_redaksi',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'manage_kontributor',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'manage users',
        ]);


        // Beri Permission ke Role
        $adminRole->givePermissionTo('manage users');
        $redaksiRole->givePermissionTo('manage_redaksi');
        $kontributorRole->givePermissionTo('manage_kontributor');

        }
    }
