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
        Schema::create('mata_kuliah_praktikums', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mata_kuliah');
            $table->enum('jenis_mata_kuliah', ['Teori', 'Praktikum']);
            $table->boolean('is_active')->default(true);
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliah_praktikums');
    }
};
