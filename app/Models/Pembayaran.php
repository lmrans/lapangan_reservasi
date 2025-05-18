<?php

namespace App\Models;

use Database\Seeders\Reservasi;
use Database\Seeders\reservasiSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pembayaran extends Model
{
    use HasFactory;
    protected $table = 'pembayaran';
    protected $fillable = [
        'reservasi_id',
        'total_bayar',
        'bukti_transfer',
        'status',
    ];

    public function reservation()
    {
        return $this->belongsTo(reservasiSeeder::class, 'reservasi_id');
    }
}
