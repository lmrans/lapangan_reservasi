<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'user']);
    }

    public function index()
    {
        return view('user.index');
    }

    public function pembayaranIndex()
    {
        $userId = Auth::id();

        $pembayarans = Pembayaran::whereHas('reservasi', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        return view('user.pembayaran', compact('pembayarans'));
    }
}

