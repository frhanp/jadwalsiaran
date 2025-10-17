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
        Schema::table('users', function (Blueprint $table) {
            // Menambahkan kolom studio_id yang terhubung ke tabel studios
            // Dibuat nullable agar user lama tidak error
            // onDelete('set null') agar jika studio dihapus, user tidak ikut terhapus
            $table->foreignId('studio_id')->nullable()->after('role')->constrained('studios')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Drop foreign key constraint dulu sebelum drop kolom
            $table->dropForeign(['studio_id']);
            $table->dropColumn('studio_id');
        });
    }
};
