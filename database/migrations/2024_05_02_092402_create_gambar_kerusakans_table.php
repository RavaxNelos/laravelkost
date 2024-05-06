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
        Schema::create('gambar_kerusakan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kerusakan_id');
            $table->string('input1')->nullable();
            $table->string('input2')->nullable();
            $table->string('input3')->nullable();
            $table->string('input4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_kerusakan');
    }
};
