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
        $programs = Program::all();
        $penyiars = User::where('role', 'penyiar')->get();
        $admin = User::where('role', 'admin')->first();

        if ($programs->isEmpty() || $penyiars->isEmpty() || !$admin) {
            return; // Hentikan jika data dasar tidak ada
        }

        foreach ($programs as $program) {
            // Buat 3 sequence untuk setiap program
            for ($i = 0; $i < 3; $i++) {
                $sequence = Sequence::create([
                    'program_id' => $program->id,
                    'nama' => 'Segmen Pagi ' . ($i + 1),
                    'waktu' => Carbon::createFromTime(8 + ($i * 2), 0, 0), // Jam 08:00, 10:00, 12:00
                    'host_id' => $penyiars->random()->id,
                    'frame' => 'Live',
                    'durasi' => 120,
                    'dibuat_oleh' => $admin->id,
                ]);

                // Buat 4 item untuk setiap sequence
                for ($j = 0; $j < 4; $j++) {
                    $item = SequenceItem::create([
                        'sequence_id' => $sequence->id,
                        'materi' => 'Materi Siar Ke-' . ($j + 1),
                        'durasi' => 30,
                        'dibuat_oleh' => $admin->id,
                    ]);

                    // Tambahkan detail hanya untuk item pertama di segmen pertama agar tidak terlalu ramai
                    if ($i === 0 && $j === 0) {
                        $item->update(['keterangan' => 'Ini adalah keterangan untuk materi siar pertama.']);
                        
                        $item->materiDetails()->createMany([
                            ['isi' => 'Sub-list materi poin 1', 'dibuat_oleh' => $admin->id],
                            ['isi' => 'Sub-list materi poin 2', 'dibuat_oleh' => $admin->id],
                        ]);

                        $item->itemDetails()->createMany([
                            ['jenis' => 'ilm', 'isi' => 'ILM: Hemat Energi', 'dibuat_oleh' => $admin->id],
                            ['jenis' => 'spot', 'isi' => 'Spot: Iklan Kopi Nikmat', 'dibuat_oleh' => $admin->id],
                            ['jenis' => 'filler', 'isi' => 'Filler: Fakta Unik Hari Ini', 'dibuat_oleh' => $admin->id],
                        ]);
                    }
                }
            }
        }
    }
}
