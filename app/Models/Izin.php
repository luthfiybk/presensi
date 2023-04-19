<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izin extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'id_karyawan',
        'nama_karyawan',
        'jenis_izin',
        'file_izin',
        'tanggal'
    ];
}
