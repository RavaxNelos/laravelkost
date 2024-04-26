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
        Schema::create('kehilangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nomer_kamar');
            $table->string('lokasi_hilang');
            $table->string('barang_hilang');
            $table->string('tanggal_hilang');
            $table->string('jam_hilang');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kehilangan');
    }
};
