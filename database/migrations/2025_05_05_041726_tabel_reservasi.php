<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('lapangan_id')->constrained('lapangan')->onDelete('cascade');
        $table->date('tanggal');
        $table->time('jam_mulai');
        $table->time('jam_selesai');
        $table->enum('status', ['menunggu', 'diterima', 'selesai', 'ditolak'])->default('menunggu');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
};
