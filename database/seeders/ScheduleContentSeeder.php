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
        $programs = Program::all();

        foreach ($programs as $program) {
            $sequence1 = $program->sequences()->create([
                'nama' => 'Segmen 1',
                'waktu' => '08:00:00',
                'host_id' => $penyiars->random()->id,
                'frame' => 'Live',
                'durasi' => 60,
                'dibuat_oleh' => $admin->id,
            ]);
            $sequence1->items()->create(['materi' => 'Opening & Sapa Pendengar', 'dibuat_oleh' => $admin->id]);
            $sequence1->items()->create(['materi' => 'Putar Lagu 1', 'dibuat_oleh' => $admin->id]);

            $sequence2 = $program->sequences()->create([
                'nama' => 'Segmen 2',
                'waktu' => '09:00:00',
                'host_id' => $penyiars->random()->id,
                'frame' => 'Live',
                'durasi' => 60,
                'dibuat_oleh' => $admin->id,
            ]);
            $sequence2->items()->create(['materi' => 'Info Lalu Lintas', 'dibuat_oleh' => $admin->id]);
            $sequence2->items()->create(['materi' => 'Putar Lagu 2', 'dibuat_oleh' => $admin->id]);
        }
    }
}
