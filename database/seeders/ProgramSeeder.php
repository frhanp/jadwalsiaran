<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Program;
use App\Models\Studio;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::query()->delete();
        $studios = Studio::all();
        $admin = User::where('role', 'admin')->first();

        $programs = [
            [
                'nama' => 'SELAMAT PAGI TEMAN PRO2',
                'alias' => 'SPADA',
                'deskripsi' => 'Program pagi hari yang menyajikan musik dan informasi ringan.',
            ],
            [
                'nama' => 'SANTAI SIANG',
                'alias' => 'SASI',
                'deskripsi' => 'Program musik santai di siang hari.',
            ],
            [
                'nama' => 'SORE CERIA',
                'alias' => 'SOCER',
                'deskripsi' => 'Menemani sore hari dengan lagu-lagu ceria.',
            ],
            [
                'nama' => 'JAGA MALAM',
                'alias' => 'JAMAL',
                'deskripsi' => 'Program malam hari dengan musik syahdu.',
            ],
        ];

        foreach ($programs as $index => $program) {
            Program::create([
                'nama' => $program['nama'],
                'alias' => $program['alias'],
                'deskripsi' => $program['deskripsi'],
                'studio_id' => $studios->get($index % $studios->count())->id, // TETAPKAN STUDIO
                'dibuat_oleh' => $admin->id,
            ]);
        }
    
    }   
}
