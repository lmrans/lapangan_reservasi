<?php

namespace Database\Seeders;

use App\Models\Lapangan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class lapanganseeder extends Seeder
{
    public function run(): void
    {
       $lapangans = [
        [

            'nama_lapangan'   => 'Lapangan Futsal A',
            'lokasi'          => 'Kampus Timur',
            'kode_lapangan'   => 'LAP001',
            'deskripsi'       => 'Lapangan indoor dengan rumput sintetis',
            'harga_per_jam'   => 75000,
        ],
        [

            'nama_lapangan'   => 'Lapangan Basket B',
            'lokasi'          => 'Kampus Barat',
             'kode_lapangan'   => 'LAP002',
            'deskripsi'       => 'Lapangan outdoor standar turnamen',
            'harga_per_jam'   => 50000,
        ],
        [

            'nama_lapangan'   => 'Lapangan Badminton C',
            'lokasi'          => 'Gedung Olahraga Lantai 2',
             'kode_lapangan'   => 'LAP003',
            'deskripsi'       => 'Lapangan dengan lantai kayu profesional',
            'harga_per_jam'   => 60000,
        ],
    ];

        foreach ($lapangans as $item) {
            Lapangan::create($item);
        }
    }
}
