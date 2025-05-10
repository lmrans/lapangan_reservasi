<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('lapangan_user', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // User yang menyukai lapangan
        $table->foreignId('lapangan_id')->constrained('lapangan')->onDelete('cascade'); // Lapangan yang difavoritkan
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('lapangan_user');
    }
};
