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
        Schema::table('sequences', function (Blueprint $table) {
            // Tambahkan unique index untuk kombinasi program_id dan waktu
            $table->unique(['program_id', 'waktu']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sequences', function (Blueprint $table) {
            // Hapus index jika rollback
            $table->dropUnique(['program_id', 'waktu']);
        });
    }
};
