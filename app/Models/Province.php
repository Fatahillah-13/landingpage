<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'indonesia_provinces';
    protected $fillable = [
        'code',
        'name',
        'meta',
        'created_at',
        'updated_at'
    ];

    public function cities()
    {
        return $this->hasMany(Cities::class, 'province_code');
    }
}
