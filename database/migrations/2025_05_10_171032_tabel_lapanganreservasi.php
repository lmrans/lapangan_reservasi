<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
   Schema::create('lapangan_reservasi', function (Blueprint $table) {
    $table->id();
    $table->foreignId('reservasi_id')->constrained('reservasi')->onDelete('cascade');
    $table->foreignId('lapangan_id')->constrained('lapangan')->onDelete('cascade');
    $table->timestamps();
});

}

    public function down(): void
    {
        Schema::dropIfExists('lapangan_reservasi');
    }
};
