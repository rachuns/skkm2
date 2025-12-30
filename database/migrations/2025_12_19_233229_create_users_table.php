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
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('nama_lengkap');
            $table->string('email')->unique();
            $table->string('password');

            $table->foreignId('level_id')
                ->constrained('levels')
                ->cascadeOnDelete();

            $table->foreignId('fakultas_id')
                ->nullable()
                ->constrained('fakultas')
                ->nullOnDelete();

            $table->foreignId('jurusan_id')
                ->nullable()
                ->constrained('jurusan')
                ->nullOnDelete();

            // KHUSUS MAHASISWA
            $table->string('nim')->nullable()->unique();
            $table->string('jenjang')->nullable();
            $table->year('angkatan')->nullable();
            $table->integer('semester')->nullable();

            // DOSEN PEMBIMBING (SELF RELATION)
            $table->foreignId('dpp_id')
                ->nullable()
                ->references('id')
                ->on('users')
                ->nullOnDelete();

            // DOSEN / ADMIN
            $table->string('nidn')->nullable()->unique();

            $table->enum('gender', ['L', 'P'])->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
