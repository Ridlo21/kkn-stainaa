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
        Schema::create('pembimbing_kelompoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->constrained('dosens')->onDelete('cascade');
            $table->foreignId('kelompok_id')->constrained('kelompoks')->onDelete('cascade');
            $table->enum('status', ['1', '0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembimbing_kelompoks');
    }
};
