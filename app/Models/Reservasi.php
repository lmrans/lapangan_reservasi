<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reservasi extends Model
{
  use HasFactory;
    protected $table = 'reservasi';
    protected $fillable = [
        'user_id',
        'lapangan_id',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'status',
        'kode_verifikasi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lapangan()
    {
        return $this->belongsTo(Lapangan::class);
    }

    public function payment()
    {
        return $this->hasOne(Pembayaran::class, 'reservasi_id');
    }
    public function lapangans()
    {
        return $this->belongsToMany(Lapangan::class, 'lapangan_reservasi');
    }
}
