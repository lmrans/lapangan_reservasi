<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pembayaran;
use App\Models\Reservasi;

class PembayaranControl extends Controller
{
    public function index()
    {
        $payments = Pembayaran::with('reservasi.user', 'reservasi.lapangan')->get();
        return view('admin.pembayaran.index', compact('payments'));
    }

    public function show($id)
    {
        $payment = Pembayaran::with('reservasi.user', 'reservasi.lapangan')->findOrFail($id);
        return view('admin.pembayaran.show', compact('payment'));
    }

    public function create()
    {
        $reservasi = Reservasi::all();
        return view('admin.pembayaran.create', compact('reservasi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'reservasi_id' => 'required|exists:reservasi,id',
            'jumlah' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'status' => 'required|string',
            'tanggal_pembayaran' => 'required|date',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('admin.pembayaran.index')
                         ->with('success', 'Data pembayaran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $payment = Pembayaran::findOrFail($id);
        $reservasi = Reservasi::all();
        return view('admin.pembayaran.edit', compact('payment', 'reservasi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'reservasi_id' => 'required|exists:reservasi,id',
            'jumlah' => 'required|numeric',
            'metode_pembayaran' => 'required|string',
            'status' => 'required|string',
            'tanggal_pembayaran' => 'required|date',
        ]);

        $payment = Pembayaran::findOrFail($id);
        $payment->update($request->all());

        return redirect()->route('admin.pembayaran.index')
                         ->with('success', 'Data pembayaran berhasil diupdate.');
    }

    public function destroy($id)
    {
        $payment = Pembayaran::findOrFail($id);
        $payment->delete();

        return redirect()->route('admin.pembayaran.index')
                         ->with('success', 'Data pembayaran berhasil dihapus.');
    }
}
