<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jadwal_petugas', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade');
            
            // Menggunakan foreignId ke tabel users, bisa null jika tidak ada petugas
            $table->foreignId('produser_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('pengelola_pep_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('pengarah_acara_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('petugas_lpu_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('penyiar_dinas_id')->nullable()->constrained('users')->onDelete('set null');
            
            $table->foreignId('dibuat_oleh')->constrained('users');
            $table->timestamps();

            // Mencegah ada data duplikat untuk tanggal dan program yang sama
            $table->unique(['tanggal', 'program_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_petugas');
    }
};
