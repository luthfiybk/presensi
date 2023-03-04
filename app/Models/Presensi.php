<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_karyawan',
        'nama',
        'tanggal',
        'jam_msk',
        'jam_klr',
        'latitude',
        'longitude'
    ];
}
