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
        Schema::create('kelompoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('periode_id')->constrained('periodes')->onDelete('cascade');
            $table->string('nama_kelompok');
            $table->string('instansi');
            $table->text('alamat_instansi');
            $table->string('desa');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompoks');
    }
};
