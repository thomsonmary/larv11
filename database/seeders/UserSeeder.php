<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Si Admin Admin',
            'email' => 'admin@admin.com',
            'password' =>Hash::make('12345678') 
        ]);
        User::factory()->create([
            'name' => 'Si Redaksi',
            'email' => 'redaksi@redaksi.com',
            'password' =>Hash::make('12345678') 
        ]);
        User::factory()->create([
            'name' => 'Si Kontributor',
            'email' => 'kontributor@kontributor.com',
            'password' =>Hash::make('12345678') 
        ]);

    }
}
