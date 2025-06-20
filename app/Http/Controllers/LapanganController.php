<?php

namespace App\Http\Controllers;

use App\Models\Lapangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LapanganController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        // Admin & Petugas bisa melihat semua data
        if (in_array($user->role, ['admin', 'petugas'])) {
            $lapangan = Lapangan::all();
        } else {
            // User hanya bisa lihat lapangan aktif (misal, atau yang tersedia)
            $lapangan = Lapangan::where('status', 'tersedia')->get();
        }

        return view($user->role . '.lapangan.index', compact('lapangan'));
    }

    public function create()
    {
        $this->authorizeRole(['admin', 'petugas']);

        return view(Auth::user()->role . '.lapangan.create');
    }

    public function store(Request $request)
    {
        $this->authorizeRole(['admin', 'petugas']);

        $request->validate([
            'nama_lapangan' => 'required',
            'lokasi' => 'required',
            'kode_lapangan' => 'required|unique:lapangan,kode_lapangan',
            'harga_per_jam' => 'required|numeric',
        ]);

        Lapangan::create($request->all());

        return redirect()->route(Auth::user()->role . '.lapangan.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $this->authorizeRole(['admin', 'petugas']);

        $lapangan = Lapangan::findOrFail($id);
        return view(Auth::user()->role . '.lapangan.edit', compact('lapangan'));
    }

    public function update(Request $request, $id)
    {
        $this->authorizeRole(['admin', 'petugas']);

        $request->validate([
            'nama_lapangan' => 'required',
            'lokasi' => 'required',
            'harga_per_jam' => 'required|numeric',
        ]);

        $lapangan = Lapangan::findOrFail($id);
        $lapangan->update($request->all());

        return redirect()->route(Auth::user()->role . '.lapangan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $this->authorizeRole(['admin']);

        $lapangan = Lapangan::findOrFail($id);
        $lapangan->delete();

        return redirect()->route('admin.lapangan.index')->with('success', 'Data berhasil dihapus');
    }

    private function authorizeRole(array $roles)
    {
        if (!in_array(Auth::user()->role, $roles)) {
            abort(403, 'Anda tidak memiliki izin untuk melakukan aksi ini.');
        }
    }
}
