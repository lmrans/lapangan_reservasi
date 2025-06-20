<?php

namespace App\Models;
use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
     protected $table = 'pembayaran';

    // Kolom yang bisa diisi
    protected $fillable = [
        'reservasi_id',
        'jumlah',
        'metode_pembayaran',
        'status',
        'tanggal_pembayaran'
    ];

    // Relasi: Pembayaran milik satu reservasi
    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class, 'reservasi_id');
    }
}
