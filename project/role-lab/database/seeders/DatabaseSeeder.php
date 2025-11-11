<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // User::factory(10)->create();

         // User::factory()->create([
         //    'name' => 'Test User',
         //    'email' => 'test@example.com',
         // ]);

        User::create([
            'name' => 'Lepi',
            'email' => 'lepi@gmail.com',
            'password' => Hash::make('majumapan'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Imam',
            'email' => 'imam@gmail.com',
            'password' => Hash::make('imam123'),
            'role' => 'manager'
        ]);

        User::create([
            'name' => 'Ilham',
            'email' => 'ilham@gmail.com',
            'password' => Hash::make('ilham123'),
            'role' => 'user'
        ]);
    }
}
