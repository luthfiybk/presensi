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
use Alert;
date_default_timezone_set("Asia/Jakarta");

class AdminController extends Controller
{

    public function index(Request $request, Presensi $presensi)
    {
        $today = Carbon::today()->toDateString();

        $presensi = Karyawan::leftJoinSub(
                                    Presensi::select('id_karyawan', 'tanggal', 'jam_msk', 'jam_klr', 'latitude', 'longitude')
                                            ->whereDate('presensis.created_at', '=', $today),
                                    'presensis', 'karyawans.id_karyawan', '=', 'presensis.id_karyawan' 
                                )
                            ->select('karyawans.nama', 'karyawans.id_karyawan', 'presensis.tanggal', 'presensis.jam_msk', 'presensis.jam_klr', 'presensis.latitude', 'presensis.longitude')
                            ->orderBy('karyawans.id', 'asc')
                            ->get();

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
        
        Alert::success('Berhasil', 'Berhasil menambahkan lokasi!');
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
        $user =  User::all();

        return view('admin.data-user', [
            'title' => 'Data User',
            'users' => $user,
        ]);
    }
}