<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';
    protected $fillable = [
        'number_of_employees',
        'name',
        'national_id',
        'phone',
        'family_phone_number',
        'family_status',
        'biological_mothers_name',
        'blood_type',
        'npwp',
        'email',
        'address',
        'address_province',
        'address_city',
        'address_district',
        'address_village',
        'address_rt',
        'address_rw',
        'residence',
        'domicile',
        'marital_status',
        'spouse_name',
        'number_of_children',
        'children_name',
        'children_birth_date',
        'children_json',
    ];

    // Relasi ke Wilayah untuk setiap level
    // public function provinsiWilayah()
    // {
    //     return $this->hasOne(Wilayah::class, 'kode', 'provinsi');
    // }

    // public function kotaWilayah()
    // {
    //     return $this->hasOne(Wilayah::class, 'kode', 'kota');
    // }

    // public function kecamatanWilayah()
    // {
    //     return $this->hasOne(Wilayah::class, 'kode', 'kecamatan');
    // }

    // public function kelurahanWilayah()
    // {
    //     return $this->hasOne(Wilayah::class, 'kode', 'kelurahan');
    // }

    // Relasi ke wilayah
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function cities()
    {
        return $this->belongsTo(Cities::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
