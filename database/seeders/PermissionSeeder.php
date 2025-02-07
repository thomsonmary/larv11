<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// Use App\Models\Permission;
use Spatie\Permission\Models\Permission;
use App\Models\Permission as ModelsPermission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat Permission
        Permission::create([
            'name' => 'manage_admin',
        ]);
        Permission::create([
            'name' => 'manage_redaksi',
        ]);
        Permission::create([
            'name' => 'manage_kontributor',
        ]);
    }
}
