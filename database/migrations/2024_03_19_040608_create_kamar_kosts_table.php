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
        Schema::create('kamarkost', function (Blueprint $table) {
            $table->id();
            $table->string('gambar_kost');
            // $table->string('kategori_kost');
            $table->foreignId('kategori_id');
            $table->string('harga_kost');
            $table->string('lokasi_kost');
            $table->string('ukuran_kost');
            $table->string('tipe_kost');
            $table->string('status_kost');
            $table->string('fasilitas_kost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kamarkost');
    }
};
