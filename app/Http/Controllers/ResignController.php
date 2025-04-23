<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Resign;

class ResignController extends Controller
{
    public function index() {}
    public function store(request $request)
    {
        //check if employee already exists
        $employee = Employee::where('number_of_employees', $request->number_of_employees)->first();

        if ($employee) {
            $request->validate([
                'number_of_employees' => 'required | string',
                'name' => 'required | string',
                'position' => 'string',
                'department' => 'string',
                'building' => 'required | string',
                'hire_date' => 'string',
                'date_out' => 'string',
                'address' => 'required | string',
                'date_resignation_submissions' => 'string',
                'type' => 'string',
                'reason' => 'required | string',
                'detail_reason' => 'required | string',
                'periode_of_service' => 'string',
                'age' => 'string',
                'suggestion' => 'string',
                'status_resignsubmissions' => 'string',
                'using_media' => 'string',
                'classification' => 'string',
                'print' => 'string',
            ]);

            // Assuming you have a Resign model to handle the resignation data
            Resign::create($request->all());

            return response()->json(['message' => 'Resignation submitted successfully.']);
        } else {
            return response()->json(['message' => 'Karyawan tidak ditemukan.'], 409);
        }
    }
    public function download() {}
}
