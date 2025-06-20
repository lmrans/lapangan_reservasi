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
    'nama_lapangan',
    'lokasi',
    'kode_lapangan',
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
    public function index()
{
    $lapangan = Lapangan::whereHas('pembayaran', function ($query) {
        $query->where('status', 'tersedia');
    })->get();

    return view('user.lapangan.index', compact('lapangan'));
}


}
