<?php

namespace Database\Seeders;

use App\Models\Reservasi;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class reservasiSeeder extends Seeder
{
    public function run(): void
    {
        Reservasi::create([
            'user_id' => 1,
            'lapangan_id' => 1,
            'tanggal' => '2025-05-15',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '11:00:00',
            'status' => 'menunggu',
            'kode_verifikasi' => strtoupper(Str::random(6)),
        ]);
    }
    public function user(){
        
    }

}
