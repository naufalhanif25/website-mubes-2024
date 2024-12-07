<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function TampilRegister(){
        return view('register');
    }
    
    public function SubmitRegistrasi(Request $request)
    {
        // Validasi input
        $request->validate([
            'npm' => 'required|string|min:12|max:13|unique:users,npm', // Sesuaikan dengan nama tabel Anda
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
        return redirect()->route('home.Tampil');
    }

    public function TampilHome(){
        return view('main');
    }

    public function TampilVote(){
        return view('vote');
    }

    public function TampilLogin(){
        return view('login');
    }

    public function SubmitLogin(Request $request){
        $data = $request->only('npm','password');

        if (Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->route('vote.Tampil');
        } else {
            return redirect()->back()->with('gagal','email atau password salah');
        }
    }
}
