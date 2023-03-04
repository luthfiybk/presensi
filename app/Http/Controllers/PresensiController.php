<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\User;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
date_default_timezone_set("Asia/Jakarta");

class PresensiController extends Controller
{



    public function index()
    {
        
    }

    public function getData(Karyawan $karyawan)
    {
        
    }

    public function Masuk(Request $request)
    {
        $validatedData = $request->validate([
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        $lat = $validatedData['latitude'];
        $lng = $validatedData['longitude'];
        $radius = 0.05;
        
        $data = DB::table('gedungs')
                ->select('gedungs.id',
                DB::raw("6371 * acos(cos(radians(".$lat.")) * cos(radians(gedungs.latitude)) * cos(radians(gedungs.longitude) - radians(".$lng.")) + sin(radians(".$lat.")) * sin(radians(gedungs.latitude))) AS distance"))
                ->having('distance', '<=', $radius)
                ->get();

        if(!$data-> isEmpty()){
            $presensi = Presensi::whereDate('tanggal', '=', date('Y-m-d'))->where('id_karyawan', auth()->user()->id_karyawan)->first();
            if($presensi == null) {
                $presensi = Presensi::create([
                    'id_karyawan' => auth()->user()->id_karyawan,
                    'nama' => auth()->user()->name,
                    'tanggal' => date('Y-m-d'),
                    'jam_msk' => date('H:i:s'),
                    'latitude' => $validatedData['latitude'],
                    'longitude' => $validatedData['longitude']
                ]);
            }
            $presensi = Presensi::whereDate('tanggal', '=', date('Y-m-d'))->first();
            
            return redirect('/dashboardkar')->with('success', 'Presensi sukses!');
        } else {
            return redirect('/presensi')->with('error', 'Presensi gagal!');
        }
    
        // $presensi = Presensi::whereDate('tanggal', '=', date('Y-m-d'))->where('id_karyawan', auth()->user()->id_karyawan)->first();
        // if($presensi == null) {
        //     $presensi = Presensi::create([
        //         'id_karyawan' => auth()->user()->id_karyawan,
        //         'nama' => auth()->user()->name,
        //         'tanggal' => date('Y-m-d'),
        //         'jam_msk' => date('H:i:s'),
        //         'latitude' => $validatedData['latitude'],
        //         'longitude' => $validatedData['longitude']
        //     ]);
        // }
        // $presensi = Presensi::whereDate('tanggal', '=', date('Y-m-d'))->first();

        // return redirect('/dashboardkar')->with('success', 'Presensi sukses!');
    }

    public function Pulang()
    {
        $data = [
            'jam_klr' => date('H:i:s')
        ];

        Presensi::whereDate('tanggal', '=' , date('Y-m-d'))->update($data);

        return redirect('/dashboardkar')->with('success', 'Presensi sukses!');
    }
}
