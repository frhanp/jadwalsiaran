<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cari user admin pertama untuk dijadikan pembuat program
        $admin = User::where('role', 'admin')->first();

        if ($admin) {
            Program::create([
                'nama' => 'Selamat Pagi Teman Pro2',
                'alias' => 'SPADA',
                'deskripsi' => 'Program pagi hari yang menyajikan musik dan informasi ringan.',
                'dibuat_oleh' => $admin->id,
            ]);

            Program::create([
                'nama' => 'Zona Indie',
                'alias' => 'ZODIE',
                'deskripsi' => 'Kumpulan lagu-lagu indie terbaik.',
                'dibuat_oleh' => $admin->id,
            ]);
        }
    }   
}
