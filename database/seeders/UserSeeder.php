<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin RRI',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Kepsta RRI',
            'email' => 'kepsta@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'kepsta',
        ]);

        User::create([
            'name' => 'Katim RRI',
            'email' => 'katim@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'katim',
        ]);

        User::create([
            'name' => 'Penyiar RRI',
            'email' => 'penyiar@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'penyiar',
        ]);
    }
}
