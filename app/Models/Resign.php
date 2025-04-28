<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resign extends Model
{
    protected $table = 'resignation_submissions';
    protected $fillable = [
        'number_of_employees',
        'name',
        'position',
        'department',
        'building',
        // 'hire_date',
        // 'date_out',
        'address',
        // 'date_resignation_submissions',
        // 'type',
        'reason',
        'detail_reason',
        // 'periode_of_service',
        // 'age',
        'suggestion',
        // 'status_resignsubmissions',
        // 'using_media',
        // 'classification',
        // 'print',
    ];

    public function kuisioner()
    {
        return $this->hasOne(kuisioner::class, 'resgination_submissions_id', 'id');
    }
}
