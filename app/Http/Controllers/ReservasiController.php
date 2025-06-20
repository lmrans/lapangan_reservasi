<?php

namespace App\Http\Controllers;
use App\Models\Reservasi;
use App\Models\Lapangan;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


class ReservasiController extends Controller
{

     public function index()
{
    $reservasi = Reservasi::all(); // Ambil semua data reservasi
    return view('user.reservasi.index', compact('reservasi'));
}
public function create()
{
    $lapangan = Lapangan::where('status', 'tersedia')->get();
    return view('user.reservasi.create', compact('lapangan'));
}

public function store(Request $request)
{
    $request->validate([
        'lapangan_id' => 'required',
        'tanggal' => 'required|date',
        'jam_mulai' => 'required',
        'jam_selesai' => 'required',
    ]);

    DB::beginTransaction();
    try {
        Reservasi::create([
            'user_id' => Auth::id(),
            'lapangan_id' => $request->lapangan_id,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'status' => 'menunggu',
            'kode_verifikasi' => strtoupper(Str::random(6)),
        ]);

        DB::commit();
        return redirect()->route('user.reservasi.index')->with('success', 'Reservasi berhasil dibuat!');
    } catch (\Exception $e) {
        DB::rollback();
        return back()->with('error', 'Error: ' . $e->getMessage());
        
    }
}

}
