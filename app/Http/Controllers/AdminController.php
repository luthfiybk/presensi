<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Izin;
use App\Models\Karyawan;
use App\Models\Presensi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function index(Request $request, Presensi $presensi)
    {
        $presensi = Presensi::all();
    

        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'presensis' => $presensi
        ]);
    }
    
    public function tambahLokasi(Request $request){
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
        return view('admin.tambahLokasi', [
            'title' => 'Tambah Lokasi',
            'gedungs' => $gedung,
            'active' => 'Tambah Lokasi'
        ]);

    }

    public function getIzin(Request $request, Izin $izin){
        $izin = Izin::all();

        return view('admin.data-izin', [
           'title' => 'Data Pengajuan Izin',
           'izins' => $izin,
           'active' => 'Data Pengajuan Izin' 
        ]);
    }
}