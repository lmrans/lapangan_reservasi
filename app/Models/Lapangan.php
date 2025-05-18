<?php

namespace App\Models;

use Database\Seeders\Reservasi;
use Database\Seeders\reservasiSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Lapangan extends Model
{
        use HasFactory;
protected $table = 'lapangan';
    protected $fillable = [
        'nama',
        'lokasi',
        'deskripsi',
        'harga_per_jam',
    ];

    public function reservations()
    {
        return $this->hasMany(reservasiSeeder::class);
    }

    public function reservasis()
    {
         return $this->belongsToMany(reservasiSeeder::class, 'lapangan_reservasi');
    }

}
