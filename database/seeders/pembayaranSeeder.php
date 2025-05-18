<?php

namespace Database\Seeders;

use App\Models\Pembayaran;
use App\Models\Reservasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pembayaranSeeder extends Seeder
{
      public function run(): void
    {
        pembayaran::create([
            'reservasi_id' => 1,
            'total_bayar' => 75000,
            'bukti_transfer' => 'bukti_transfer.jpg',
            'status' => 'menunggu',
        ]);
    }
}
