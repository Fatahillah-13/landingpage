<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'indonesia_districts';
    protected $fillable = [
        'code',
        'city_code',
        'name',
        'meta',
        'created_at',
        'updated_at'
    ];

    public function city()
    {
        return $this->belongsTo(Cities::class, 'city_code');
    }

    public function villages()
    {
        return $this->hasMany(Village::class, 'district_code');
    }
}
