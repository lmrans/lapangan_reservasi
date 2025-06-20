<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    // Menampilkan halaman utama petugas
    public function index()
    {
        return view('petugas.index');
    }

    // Menampilkan semua data reservasi
    public function indexReservasi()
    {
        $reservasi = Reservasi::with(['user', 'lapangan'])->get();

        return view('petugas.reservasi', compact('reservasi'));
    }

    // Verifikasi reservasi (ubah status menjadi diterima)
    public function verifikasiReservasi(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:diterima,ditolak',
    ]);

    $reservasi = Reservasi::findOrFail($id);
    $reservasi->status = $request->status;
    $reservasi->save();

    return redirect()->back()->with('success', 'Status reservasi berhasil diperbarui menjadi: ' . $request->status);
}

    // Menampilkan daftar pembayaran
    public function indexPembayaran()
    {
        $pembayarans = Pembayaran::with(['reservasi.user', 'reservasi.lapangan'])->get();

        return view('petugas.pembayaran', compact('pembayarans'));
    }

    // Update status pembayaran
    public function updatePembayaran(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,sukses,gagal',
        ]);

        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->status = $request->status;
        $pembayaran->save();

        return redirect()->back()->with('success', 'Status pembayaran berhasil diperbarui.');
    }
}
