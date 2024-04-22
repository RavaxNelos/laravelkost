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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamar_kost_id');
            $table->foreignId('user_id');
            $table->string('tanggal_pesan_kost');
            $table->string('tanggal_masuk_kost');
            $table->foreignId('pembayaran_dipilih');
            $table->string('total_harga');
            $table->string('bukti_tf');
            $table->string('no_transaksi');
            $table->string('tagihan_selanjutnya');
            $table->string('durasi_ngekost');
            $table->string('status');
            $table->string('pesan', 1500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
