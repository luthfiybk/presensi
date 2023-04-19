<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IzinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.izin', [
            'title' => 'Pengajuan Izin',
            'active' => 'Pengajuan Izin'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postIzin(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_izin' => 'required',
            'file_izin' => 'required'
        ]);

        $izin = Izin::create([
            'id_karyawan' => auth()->user()->id_karyawan,
            'nama_karyawan' => auth()->user()->name,
            'jenis_izin' => $validatedData['jenis_izin'],
            'file_izin' => $validatedData['file_izin'],
            'tanggal' => date('Y-m-d')
        ]);

        $izin = Izin::whereDate('tanggal', '=', date('Y-m-d'))->first();

        return redirect('/karyawan/riwayat-presensi')->with('success', 'Pengajuan izin berhasil diajukan!');
    }


}
