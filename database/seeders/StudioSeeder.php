<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studio;
class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        Studio::create(['nama' => 'Studio 1', 'deskripsi' => 'Studio Utama']);
        Studio::create(['nama' => 'Studio 2', 'deskripsi' => 'Studio Siaran Berita']);
        Studio::create(['nama' => 'Studio 3', 'deskripsi' => 'Studio Siaran Olahraga']);
    }
}
