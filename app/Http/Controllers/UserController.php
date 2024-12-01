<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('register');
    }
    public function login(){
        return view('login');
    }
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'npm' => 'required|string|max:12|unique:users,npm', // Sesuaikan dengan nama tabel Anda
            'name' => 'required|string|max:100',
            'password' => 'required|string|min:8',
        ]);

        // Simpan data ke database
        User::create([
            'npm' => $request->npm,
            'name' => $request->name,
            'password' =>$request->password,
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }
}
