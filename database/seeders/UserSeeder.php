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
        // Hapus data lama untuk menghindari duplikat email
        User::query()->delete();

        // User Admin
        User::create([
            'name' => 'Admin RRI',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // User Pimpinan
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

        // User Penyiar (lebih dari satu untuk contoh)
        User::create([
            'name' => 'Penyiar 1',
            'email' => 'penyiar1@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'penyiar',
        ]);
        User::create([
            'name' => 'Penyiar 2',
            'email' => 'penyiar2@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'penyiar',
        ]);
        User::create([
            'name' => 'Penyiar 3',
            'email' => 'penyiar3@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'penyiar',
        ]);
    }
}
