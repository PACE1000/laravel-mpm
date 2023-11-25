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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
            $table->unsignedBigInteger('ID_Mahasiswa');
            $table->unsignedBigInteger('ID_Mata_Kuliah');
            $table->foreign('ID_Mahasiswa')->references('id')->on('mahasiswas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ID_Mata_Kuliah')->references('id')->on('mata_kuliahs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
