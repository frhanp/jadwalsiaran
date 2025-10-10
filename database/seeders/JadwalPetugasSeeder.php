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
        $programSpada = Program::where('alias', 'SPADA')->first();
        $programZodie = Program::where('alias', 'ZODIE')->first();

        // Contoh jadwal hari ini dengan 2 penyiar
        $jadwal1 = JadwalPetugas::create([
            'tanggal' => Carbon::today(),
            'program_id' => $programSpada->id,
            'produser_id' => $admin->id,
            'pengarah_acara_id' => $katim->id,
            'dibuat_oleh' => $admin->id,
        ]);
        // Menugaskan 2 penyiar
        $jadwal1->penyiars()->attach([
            $penyiars->get(0)->id,
            $penyiars->get(1)->id,
        ]);

        // Contoh jadwal besok dengan 1 penyiar
        $jadwal2 = JadwalPetugas::create([
            'tanggal' => Carbon::tomorrow(),
            'program_id' => $programZodie->id,
            'produser_id' => $admin->id,
            'pengarah_acara_id' => $katim->id,
            'dibuat_oleh' => $admin->id,
        ]);
        // Menugaskan 1 penyiar
        $jadwal2->penyiars()->attach($penyiars->get(2)->id);
    }
}
