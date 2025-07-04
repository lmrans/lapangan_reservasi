<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up()
{
    Schema::create('lapangan', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lapangan');
        $table->string('lokasi');
        $table->string('kode_lapangan')->unique();
        $table->text('deskripsi')->nullable();
        $table->decimal('harga_per_jam', 10, 2);
        $table->enum('status', ['tersedia', 'tidak tersedia'])->default('tersedia');
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('lapangan');
    }
};
