<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Lapangan;


class Reservasi extends Model
{
 protected $table = 'reservasi';

    protected $fillable = [
        'user_id',
        'lapangan_id',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'status',
        'kode_verifikasi'
    ];

         public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lapangan()
{
    return $this->belongsTo(Lapangan::class);
}



}
