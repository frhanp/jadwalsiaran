<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;
use App\Models\User;
use App\Models\Sequence;
use App\Models\SequenceItem;
use Carbon\Carbon;


class ScheduleContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sequence::query()->delete();
        $admin = User::where('role', 'admin')->first();
        $penyiars = User::where('role', 'penyiar')->get();

        $programSchedules = [
            'SPADA' => [['nama' => 'Segmen Pagi 1', 'waktu' => '06:00:00'], ['nama' => 'Segmen Pagi 2', 'waktu' => '08:00:00']],
            'SASI' => [['nama' => 'Segmen Siang 1', 'waktu' => '10:00:00'], ['nama' => 'Segmen Siang 2', 'waktu' => '12:00:00']],
            'SOCER' => [['nama' => 'Segmen Sore 1', 'waktu' => '14:00:00'], ['nama' => 'Segmen Sore 2', 'waktu' => '16:00:00']],
            'JAMAL' => [['nama' => 'Segmen Malam 1', 'waktu' => '18:00:00'], ['nama' => 'Segmen Malam 2', 'waktu' => '20:00:00']],
        ];

        foreach ($programSchedules as $alias => $sequences) {
            $program = Program::where('alias', $alias)->first();
            if ($program) {
                foreach ($sequences as $seq) {
                    $sequence = $program->sequences()->create([
                        'nama' => $seq['nama'],
                        'waktu' => $seq['waktu'],
                        'host_id' => $penyiars->random()->id,
                        'frame' => 'Live',
                        'durasi' => 120,
                        'dibuat_oleh' => $admin->id,
                    ]);
                    // Tambah contoh materi siar
                    $sequence->items()->create(['materi' => 'Opening & Sapa Pendengar', 'dibuat_oleh' => $admin->id]);
                    $sequence->items()->create(['materi' => 'Putar Lagu Request', 'dibuat_oleh' => $admin->id]);
                }
            }
        }
    }
}
