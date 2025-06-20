<?php

namespace Database\Seeders;

use App\Models\Pembayaran;

use Illuminate\Database\Seeder;

class pembayaranSeeder extends Seeder
{
      public function run(): void
    {

         Pembayaran::create([
            'user_id' => 1,
            'reservasi_id' => 1,
            'bukti_pembayaran' => 'bukti1.jpg',
            'jumlah' => 100000,
            'status' => 'menunggu',
        ]);
    }
}
