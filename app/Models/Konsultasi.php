<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';

    protected $fillable = [
        'nik',
        'name',
        'phone',
        'level',
        'department',
        'description',
        'consul_type',
        'consul_time', // tambahkan ini
        'consul_date',
    ];
}
