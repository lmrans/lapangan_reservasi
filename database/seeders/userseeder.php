<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'User Satu',
            'email' => 'user@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'user', // bisa: admin, petugas, user
        ]);
    }
}
