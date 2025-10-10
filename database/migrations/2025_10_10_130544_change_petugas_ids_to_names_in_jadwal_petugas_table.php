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
            // Drop foreign keys
            $table->dropForeign(['produser_id']);
            $table->dropForeign(['pengelola_pep_id']);
            $table->dropForeign(['pengarah_acara_id']);
            $table->dropForeign(['petugas_lpu_id']);

            // Rename columns
            $table->renameColumn('produser_id', 'produser_nama');
            $table->renameColumn('pengelola_pep_id', 'pengelola_pep_nama');
            $table->renameColumn('pengarah_acara_id', 'pengarah_acara_nama');
            $table->renameColumn('petugas_lpu_id', 'petugas_lpu_nama');
        });

        // Change column types to string
        Schema::table('jadwal_petugas', function (Blueprint $table) {
            $table->string('produser_nama')->nullable()->change();
            $table->string('pengelola_pep_nama')->nullable()->change();
            $table->string('pengarah_acara_nama')->nullable()->change();
            $table->string('petugas_lpu_nama')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert column types
        Schema::table('jadwal_petugas', function (Blueprint $table) {
            $table->unsignedBigInteger('produser_nama')->nullable()->change();
            $table->unsignedBigInteger('pengelola_pep_nama')->nullable()->change();
            $table->unsignedBigInteger('pengarah_acara_nama')->nullable()->change();
            $table->unsignedBigInteger('petugas_lpu_nama')->nullable()->change();
        });

        // Revert column names
        Schema::table('jadwal_petugas', function (Blueprint $table) {
            $table->renameColumn('produser_nama', 'produser_id');
            $table->renameColumn('pengelola_pep_nama', 'pengelola_pep_id');
            $table->renameColumn('pengarah_acara_nama', 'pengarah_acara_id');
            $table->renameColumn('petugas_lpu_nama', 'petugas_lpu_id');
        });

        // Re-add foreign keys
        Schema::table('jadwal_petugas', function (Blueprint $table) {
            $table->foreign('produser_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('pengelola_pep_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('pengarah_acara_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('petugas_lpu_id')->references('id')->on('users')->onDelete('set null');
        });
    }
};
