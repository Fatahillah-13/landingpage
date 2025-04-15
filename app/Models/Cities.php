<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    protected $table = 'indonesia_cities';
    protected $fillable = [
        'code',
        'province_code',
        'name',
        'meta',
        'created_at',
        'updated_at'
    ];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code');
    }
    public function districts()
    {
        return $this->hasMany(District::class, 'city_code');
    }
}
