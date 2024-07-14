<?php

namespace App\Http\Controllers;


use App\Models\buku;
use App\Models\anggota;
use App\Models\petugas;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function cek_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('home')->with('success', 'Selamat Datang !');
        }

        return back()->withErrors([
            // 'email' => 'Username / Password Salah !'
            'email' => 'Gagal Login !'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function index()
    {
        $data['petugas'] = petugas::all()->count();
        $data['buku'] = buku::all()->count();
        $data['anggota'] = anggota::all()->count();
        $data['title'] = "Home";
        // $data['alert'] = "selamat";
        return view('admin.home', $data);
    } 

}
