<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Izin;
use App\Models\Karyawan;
use App\Models\Presensi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index(Request $request, Presensi $presensi)
    {
        $presensi = Presensi::whereDate('created_at', Carbon::today()->toDateString())
        ->get();
        $karyawanPresensi = DB::table('users');

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'presensis' => $presensi,
            'active' => 'Dashboard'
        ]);
    }
    
    public function tambahLokasi(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);


        Gedung::create($validatedData);
        
        return redirect('/admin/tambah-lokasi')->with('success', 'Tambah Lokasi berhasil!');

    }

    public function getLokasi(Request $request)
    {
        $gedung = Gedung::all();

        return view('admin.tambah-lokasi', [
            'title' => 'Tambah Lokasi',
            'gedungs' => $gedung,
            'active' => 'Tambah Lokasi'
        ]);

    }

    public function getIzin(Request $request, Izin $izin)
    {
        $izin = Izin::paginate(5);

        return view('admin.data-izin', [
            'title' => 'Data Izin',
            'izins' => $izin,
            'active' => 'Data Izin' 
        ]);
    }

    public function getAllUser(Request $request, User $user)
    {
        $user =  User::paginate(8);

        return view('admin.data-user', [
            'title' => 'Data User',
            'users' => $user,
        ]);
    }
}