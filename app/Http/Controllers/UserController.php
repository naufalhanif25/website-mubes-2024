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
            'npm' => ['required','string','min:13','max:13','unique:users,npm','regex:/^.{2}(08107010).{3}$/'], // Sesuaikan dengan nama tabel Anda
            'name' => 'required|string|max:100',
            'password' => 'required|string|min:6',
        ]);

        // Simpan data ke database
        User::create([
            'npm' => $request->npm,
            'name' => $request->name,
            'password' =>bcrypt($request->password),
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

    public function SubmitLogin(Request $request)
{
    $request->validate([
        'npm' => 'required|numeric',
        'password' => 'required|string|min:6',
    ]);

    $credentials = $request->only('npm', 'password');

    if (Auth::attempt($credentials)) {
        // Regenerasi sesi untuk keamanan
        $request->session()->regenerate();
        return redirect()->route('vote.Tampil');
    }

    // Jika login gagal
    return redirect()->back()->with('gagal', 'NPM atau password salah')->withInput();
}

}
