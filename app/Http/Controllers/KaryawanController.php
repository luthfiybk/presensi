<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Karyawan;
use App\Models\Presensi;
use Illuminate\Http\Request;
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
            $presensi = Presensi::where('id_karyawan', auth()->user()->id_karyawan)->get();
        }       
        return view('karyawan.dashboard', [
            'title' => 'Dashboard',
            'presensis' => $presensi
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

    public function getIp()
    {
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }

    public function getLocation()
    {
        $ip = $this->getIp();
        $data = Location::get($ip);
        return view('karyawan.presensi', compact('data'), [
            'title' => 'Presensi',
            'active' => 'presensi'
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
