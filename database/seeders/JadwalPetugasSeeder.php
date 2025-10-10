<?php

namespace Database\Seeders;

use App\Models\Program;
use App\Models\JadwalPetugas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Studio;

class JadwalPetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JadwalPetugas::query()->delete();

        $admin = User::where('role', 'admin')->first();
        $penyiars = User::where('role', 'penyiar')->get();
        $programs = Program::all();

        if ($programs->isEmpty() || $penyiars->isEmpty()) {
            $this->command->info('Pastikan data User dan Program sudah terisi sebelum menjalankan JadwalPetugasSeeder.');
            return;
        }

        foreach ($programs as $program) {
            // AWAL MODIFIKASI
            $jadwal = JadwalPetugas::create([
                'tanggal' => Carbon::today(),
                'program_id' => $program->id,
                // 'studio_id' DIHAPUS DARI SINI
                'produser_nama' => 'Nama Produser Manual',
                'pengarah_acara_nama' => 'Nama Pengarah Acara Manual',
                'pengelola_pep_nama' => 'Nama Pengelola PEP',
                'petugas_lpu_nama' => 'Nama Petugas LPU',
                'dibuat_oleh' => $admin->id,
            ]);
            // AKHIR MODIFIKASI

            if ($penyiars->isNotEmpty()) {
                $jadwal->penyiars()->attach($penyiars->random());
            }
        }
    }
}
