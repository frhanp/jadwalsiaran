<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\JadwalPetugas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalPetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ambil semua program yang ada
        $programs = Program::all();

        // Ambil admin pertama sebagai 'dibuat_oleh'
        $admin = User::where('role', 'admin')->first();

        // Ambil semua user selain admin untuk dijadikan petugas
        $petugasUsers = User::where('role', '!=', 'admin')->get();

        // Jika tidak ada program atau user petugas, hentikan seeder
        if ($programs->isEmpty() || $petugasUsers->isEmpty() || !$admin) {
            return;
        }

        // Buat jadwal petugas untuk setiap program pada hari ini
        foreach ($programs as $program) {
            JadwalPetugas::updateOrCreate(
                [
                    'tanggal' => now()->format('Y-m-d'),
                    'program_id' => $program->id,
                ],
                [
                    'produser_id' => $petugasUsers->random()->id,
                    'pengelola_pep_id' => $petugasUsers->random()->id,
                    'pengarah_acara_id' => $petugasUsers->random()->id,
                    'petugas_lpu_id' => $petugasUsers->random()->id,
                    'penyiar_dinas_id' => $petugasUsers->where('role', 'penyiar')->isNotEmpty() ? $petugasUsers->where('role', 'penyiar')->random()->id : $petugasUsers->random()->id,
                    'dibuat_oleh' => $admin->id,
                ]
            );
        }
    }
}
