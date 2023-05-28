<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // make index method
    public function index()
    {
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // make authenticate method
    public function authenticate(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'id_karyawan' => 'required',
            'password' => 'required|min:5|max:20'
        ]);

        // check email, password, and role
        if (auth()->attempt($validatedData)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                Alert::success('Berhasil', 'Login Berhasil!');
                return redirect('/admin/dashboard')->content('admin.dashboard');
            } else if (auth()->user()->role == 'karyawan') {
                Alert::success('Berhasil', 'Login Berhasil!');
                return redirect('/karyawan/riwayat-presensi')->content('karyawan.dashboard');
            }
        }

        // redirect to login page
        Alert::error('Gagal', 'Login Gagal!');
        return back()->with('error','Login failed, please try again');
    }

    // make logout method
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // redirect to login page
        return redirect('/');
    }
}
