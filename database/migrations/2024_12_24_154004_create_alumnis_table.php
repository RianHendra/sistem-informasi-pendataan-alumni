<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('gambar')->nullable();
            $table->year('tahun_lulus');
            $table->string('pekerjaan')->nullable();
            $table->text('deskripsi_singkat')->nullable();
            $table->string('email')->nullable();
            $table->string('telepon')->nullable();
            $table->string('alamat')->nullable();
            $table->foreignId('jurusan_id')->constrained('jurusans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
