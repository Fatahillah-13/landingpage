<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kuisioner extends Model
{
    protected $table = 'kuesioners';
    protected $fillable = [
        'resgination_submissions_id',
        'number_of_employees',
        'k1',
        'k2',
        'k3',
        'k4',
        'k5',
        'k6',
        'k7',
    ];
}
