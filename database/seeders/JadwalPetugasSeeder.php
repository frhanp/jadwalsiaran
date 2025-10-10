<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\JadwalPetugas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class JadwalPetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalPetugas::query()->delete();

        $admin = User::where('role', 'admin')->first();
        $katim = User::where('role', 'katim')->first();
        $penyiars = User::where('role', 'penyiar')->get();
        $programs = Program::all();

        // Jadwalkan semua 4 program untuk hari ini
        foreach ($programs as $program) {
            $jadwal = JadwalPetugas::create([
                'tanggal' => Carbon::today(),
                'program_id' => $program->id,
                'produser_id' => $admin->id,
                'pengarah_acara_id' => $katim->id,
                'dibuat_oleh' => $admin->id,
            ]);

            // Tugaskan 1 atau 2 penyiar secara acak
            $jadwal->penyiars()->attach(
                $penyiars->random(rand(1, 2))->pluck('id')->toArray()
            );
        }
    }
}
