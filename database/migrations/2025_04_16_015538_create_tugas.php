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
        Schema::create('penugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->timestamps();
        });

        Schema::create('pelaksana', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamps();
        });

        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_penugas')->constrained('penugas')->onDelete('cascade');
            $table->foreignId('id_pelaksana')->constrained('pelaksana')->onDelete('cascade');
            $table->string('judul');
            $table->string('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penugas');
        Schema::dropIfExists('pelaksana');
        Schema::dropIfExists('tugas');
    }
};
