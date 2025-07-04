<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 // database/migrations/xxxx_xx_xx_create_users_table.php
public function up()
{
   Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->enum('role', ['admin', 'petugas', 'user'])->default('user');
    $table->timestamps();
});

}
public function down()
{
    Schema::dropIfExists('users');
}
};
