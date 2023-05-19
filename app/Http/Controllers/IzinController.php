<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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

        if($request->hasFile('file_izin')){
            $fileName = $request->file('file_izin')->getClientOriginalName();
            $request->file('file_izin')->storeAs('public/file_izin', $fileName);
            $validatedData['file_izin'] = $fileName; 
        }
        $izin = Izin::create([
            'id_karyawan' => auth()->user()->id_karyawan,
            'nama_karyawan' => auth()->user()->name,
            'jenis_izin' => $validatedData['jenis_izin'],
            'file_izin' => $validatedData['file_izin'],
            'tanggal' => date('Y-m-d'),
            'stts_izin' => 'Belum Diverifikasi'
        ]);

        $izin = Izin::whereDate('tanggal', '=', date('Y-m-d'))->first();


        return redirect('/karyawan/riwayat-presensi')->withSuccess('Pengajuan izin berhasil diajukan!');
    }

    public function getIzin(Request $request){
        $izin = Izin::all();

        return view('admin.data-izin', [
            'title' => 'Data Izin',
            'izins' => $izin,
            'active' => 'Data Izin',
        ]);
    }

    public function detailIzin($id)
    {
        $izin = Izin::where('id', $id)->get();
        
        // dd($izin);
        return view('admin.detail-izin', [
            'title' => 'Detail Izin',
            'izins' => $izin
        ]);
    }

    public function verified($id)
    {
        Alert::success("Berhasil", "Izin Disetujui");
        $verified = Izin::where('id', $id)->update(['stts_izin' => 'Izin Disetujui']);
        return redirect('/admin/data-izin?id=unverified')->withSuccess('Izin Disetujui');
    }

    public function unverified($id)
    {
        $unverified = Izin::where('id', $id)->update(['stts_izin' => 'Izin Tidak Disetujui']);
        return redirect('/admin/data-izin?id=unverified')->withSuccess('Izin Tidak Disetujui');
    }
}
