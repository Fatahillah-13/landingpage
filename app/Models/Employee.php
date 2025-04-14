<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'nik_karyawan',
        'nama_lengkap',
        'nik_ktp',
        'no_hp',
        'no_hp_keluarga',
        'status_keluarga',
        'nama_ibu',
        'gol_darah',
        'npwp',
        'email',
        'alamat_ktp',
        'provinsi',
        'kota',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'tinggal_di',
        'alamat_domisili',
        'status_pernikahan',
        'nama_pasangan',
        'jumlah_anak',
        'nama_anak',
        'tanggal_lahir_anak',
    ];
}
