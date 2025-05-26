<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat user dengan role 'user'
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'type' => 'user', // Sesuaikan dengan kolom tipe di database
            'password' => Hash::make('password123'),
        ]);

        // Buat user dengan role 'admin'
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'type' => 'admin',
            'password' => Hash::make('password123'),
        ]);

        // Buat user dengan role 'manager'
        User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'type' => 'manager',
            'password' => Hash::make('password123'),
        ]);
    }
}
