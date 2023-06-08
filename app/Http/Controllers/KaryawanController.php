<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Stevebauman\Location\Facades\Location;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $presensi = Presensi::where('nama', 'like', '&' . $request->search . '%');
        } else {
            $presensi = Presensi::where('id_karyawan', auth()->user()->id_karyawan)->whereDate('created_at', Carbon::today()->toDateString())->get();
        }       
        return view('karyawan.dashboard', [
            'title' => 'Riwayat Presensi',
            'presensis' => $presensi,
            'active' => 'Riwayat Presensi',
            'active' => ''
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'id_karyawan' => 'required',
            'email' => 'required|email:dns|unique:users'
        ]);

        Karyawan::create($validatedData);
    }

    public function getLocation()
    {
        return view('karyawan.presensi', [
            'title' => 'Presensi',
            'active' => 'presensi',
            'active' => ''
        ]);
    }

    public function edit(Karyawan $karyawan)
    {
        //
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        //
    }

    public function destroy(Karyawan $karyawan)
    {
        //
    }
}
