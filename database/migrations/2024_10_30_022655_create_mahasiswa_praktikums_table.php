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
        Schema::create('mahasiswa_praktikums', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('nim'); // Pastikan ada di sini
            $table->foreignId('mata_kuliah_praktikum_id')->constrained();
            $table->string('semester');
            $table->boolean('status_lulus')->default(false);
            $table->string('dokumen')->nullable(); // Tambahkan kolom dokumen
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa_praktikums');
    }
};
