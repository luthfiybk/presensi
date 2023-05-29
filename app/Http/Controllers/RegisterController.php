<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Karyawan;
use Alert;

class RegisterController extends Controller
{
    // make index method
    public function index()
    {
        return view('register.index',[
            'title' => 'Tambah User',
            'active' => 'Data User'
        ]);
    }

    // make store method
    public function store(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'id_karyawan' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // encrypt password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        
        if ($validatedData['role'] == 'karyawan') {
            if (Karyawan::where('email', $validatedData['email'])->doesntExist()) {
                Karyawan::create([
                    'nama' => $validatedData['name'],
                    'email' => $validatedData['email'],
                    'id_karyawan' => $validatedData['id_karyawan'],
                ]);
            }
        } else if($validatedData['role'] == 'admin') {
            if(Admin::where('email', $validatedData['email'])->doesntExist()) {
                Admin::create([
                    'nama' => $validatedData['name'],
                    'email' => $validatedData['email'],
                    'id_karyawan' => $validatedData['id_karyawan']
                ]);
            }
        }

        Alert::success('Berhasil', 'User Berhasil Ditambahkan!');
        return redirect('/admin/dashboard')->with('success','Register success, please login');
    } 
}
