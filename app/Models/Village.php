<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $table = 'indonesia_villages';
    protected $fillable = [
        'code',
        'district_code',
        'name',
        'meta',
        'created_at',
        'updated_at'
    ];

    public function district()
    {
        return $this->belongsTo(District::class, 'district_code');
    }
}
