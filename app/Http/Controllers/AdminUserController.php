<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminUserController extends Controller
{
    // Menampilkan semua akun pengguna
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    // Form tambah akun
    public function create()
    {
        return view('admin.user.create');
    }

    // Menyimpan akun baru dengan DB::transaction
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'role' => 'required|in:admin,petugas,user',
            'password' => 'required|string|min:6',
        ]);

        DB::beginTransaction();
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password),
            ]);

            DB::commit();
            Log::info('Transaksi berhasil untuk user: ' . $request->email);
            return redirect()->route('admin.user.index')->with('success', 'Akun berhasil dibuat.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Transaksi gagal: ' . $e->getMessage());
            return back()->with('error', 'Terjadi kesalahan saat membuat akun: ' . $e->getMessage());
        }
    }

    // Form edit akun
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
    }

    // Menyimpan perubahan akun
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role' => 'required|in:admin,petugas,user',
        ]);

        $user->update($request->only('name', 'email', 'role'));

        return redirect()->route('admin.user.index')->with('success', 'Akun berhasil diperbarui.');
    }

    // Menghapus akun
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.user.index')->with('success', 'Akun berhasil dihapus.');
    }
}
