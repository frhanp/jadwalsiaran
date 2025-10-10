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
        Schema::table('jadwal_petugas', function (Blueprint $table) {
            // Nama constraint bisa berbeda jika tidak mengikuti konvensi Laravel
            $table->dropForeign(['penyiar_dinas_id']);
            $table->dropColumn('penyiar_dinas_id');
        });

        Schema::create('jadwal_penyiar', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_petugas_id')->constrained('jadwal_petugas')->onDelete('cascade');
            $table->foreignId('penyiar_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_penyiar');

        Schema::table('jadwal_petugas', function (Blueprint $table) {
            $table->foreignId('penyiar_dinas_id')->nullable()->constrained('users')->onDelete('set null');
        });
    }
};
