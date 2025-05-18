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
                'nama' => 'Lapangan Futsal A',
                'lokasi' => 'Kampus Timur',
                'deskripsi' => 'Lapangan indoor dengan rumput sintetis',
                'harga_per_jam' => 75000,
            ],
            [
                'nama' => 'Lapangan Basket B',
                'lokasi' => 'Kampus Barat',
                'deskripsi' => 'Lapangan outdoor standar turnamen',
                'harga_per_jam' => 50000,
            ],
            [
                'nama' => 'Lapangan Badminton C',
                'lokasi' => 'Gedung Olahraga Lantai 2',
                'deskripsi' => 'Lapangan dengan lantai kayu profesional',
                'harga_per_jam' => 60000,
            ],
        ];

        foreach ($lapangans as $item) {
            Lapangan::create($item);
        }
    }
}
