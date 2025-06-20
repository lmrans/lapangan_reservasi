<?php

namespace App\Http\Controllers;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

     public function akunIndex()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }
}
