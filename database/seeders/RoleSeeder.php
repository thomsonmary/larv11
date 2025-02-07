<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Buat Role
                $adminRole = Role::create(['name' => 'admin']);
                $redaksiRole = Role::create(['name' => 'redaksi']);
                $kontributorRole = Role::create(['name' => 'kontributor']);
                // Beri Permission ke Role
                $adminRole->givePermissionTo('manage_admin');
                $redaksiRole->givePermissionTo('manage_redaksi');
                $kontributorRole->givePermissionTo('manage_kontributor');
        
    }
}
