<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reservasi_id')->constrained('reservasi')->onDelete('cascade');
            $table->date('tanggal_bayar');
            $table->decimal('jumlah', 10, 2);
            $table->enum('metode', ['transfer', 'cash']);
            $table->enum('status_pembayaran', ['pending', 'dibayar', 'gagal'])->default('pending');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
