<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->string('NIK', 16)->primary();
            $table->string('kk', 16);
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->enum('status_perkawinan', ['kawin', 'belum_kawin']);
            $table->string('shdk');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('dusun');
            $table->integer('RT');
            $table->integer('RW');
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->integer('umur')->nullable(); // Tambahkan kolom umur
            $table->string('kartu_sehat', 20)->nullable(); // Tambahkan kolom kartu sehat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penduduks');
    }
};