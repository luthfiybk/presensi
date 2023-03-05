<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
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
    }

    public function getLokasi(Request $request)
    {
        return view('admin.tambahLokasi', [
            'title' => 'Tambah Lokasi',
            'active' => 'Tambah Lokasi'
        ]);
    }
}