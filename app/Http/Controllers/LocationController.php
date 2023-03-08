<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function getDataJson(Gedung $gedung)
    {
    //     $gedung = DB::table('gedungs')->select('latitude', 'longitude')->get();
    //     // dd($gedung);
    //     return json_encode($gedung);
    }
}
