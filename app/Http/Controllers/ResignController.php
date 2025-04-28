<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Resign;
use App\Models\kuisioner;

class ResignController extends Controller
{
    public function index() {}
    public function create()
    {
        return view('pages.resign.form');
    }
    public function store(Request $request)
    {
        //change k from string to numeric
        $request->merge([
            'k1' => (float) $request->input('k1'),
            'k2' => (float) $request->input('k2'),
            'k3' => (float) $request->input('k3'),
            'k4' => (float) $request->input('k4'),
            'k5' => (float) $request->input('k5'),
            'k6' => (float) $request->input('k6'),
            'k7' => (float) $request->input('k7'),
        ]);
        // Validasi data terlebih dahulu
        $validatedData = $request->validate([
            'number_of_employees' => 'required|string',
            'national_id' => 'required|string',
            'name' => 'string|nullable',
            'position' => 'string|nullable',
            'department' => 'string|nullable',
            'building' => 'required|string',
            // 'hire_date' => 'string|nullable',
            // 'date_out' => 'string|nullable',
            'address' => 'required|string',
            // 'date_resignation_submissions' => 'string|nullable',
            // 'type' => 'string|nullable',
            'reason' => 'required|string',
            'detail_reason' => 'required|string',
            // 'periode_of_service' => 'string|nullable',
            // 'age' => 'string|nullable',
            'suggestion' => 'string|nullable',
            // 'status_resignsubmissions' => 'string|nullable',
            // 'using_media' => 'string|nullable',
            // 'classification' => 'string|nullable',
            // 'print' => 'string|nullable',
            'k1' => 'required|numeric',
            'k2' => 'required|numeric',
            'k3' => 'required|numeric',
            'k4' => 'required|numeric',
            'k5' => 'required|numeric',
            'k6' => 'required|numeric',
            'k7' => 'required|numeric',
        ]);

        // Cek apakah karyawan sudah ada
        $employee = Employee::where('number_of_employees', $validatedData['number_of_employees'])->where('national_id', $validatedData['national_id'])->first();
        $employee_name = $employee->name;
        $employee_position = $employee->job_id;
        $employee_department = $employee->department_id;

        // Validate national_id match
        if ($employee->national_id !== $request->input('national_id')) {
            return redirect()->back()->with('error', 'Data karyawan tidak valid.');
        }

        if ($employee) {
            // Simpan data resign
            $resignation = new Resign();
            $resignation->number_of_employees = $validatedData['number_of_employees'];
            $resignation->name = $employee_name;
            $resignation->position = $employee_position;
            $resignation->department = $employee_department;
            $resignation->building = $validatedData['building'];
            // $resignation->hire_date = $employee->hire_date;
            // $resignation->date_out = $validatedData['date_out'];
            $resignation->address = $validatedData['address'];
            // $resignation->date_resignation_submissions = $validatedData['date_resignation_submissions'];
            // $resignation->type = $validatedData['type'];
            $resignation->reason = $validatedData['reason'];
            $resignation->detail_reason = $validatedData['detail_reason'];
            // $resignation->periode_of_service = $validatedData['periode_of_service'];
            // $resignation->age = $validatedData['age'];
            $resignation->suggestion = $validatedData['suggestion'];
            // $resignation->status_resignsubmissions = $validatedData['status_resignsubmissions'];
            // $resignation->using_media = $validatedData['using_media'];
            // $resignation->classification = $validatedData['classification'];
            // $resignation->print = $validatedData['print'];
            $resignation->save();

            // Simpan data kuisioner
            $kuisioner = new kuisioner();
            $kuisioner->resignation_submission_id = $resignation->id;
            $kuisioner->number_of_employees = $validatedData['number_of_employees'];
            $kuisioner->k1 = $validatedData['k1'];
            $kuisioner->k2 = $validatedData['k2'];
            $kuisioner->k3 = $validatedData['k3'];
            $kuisioner->k4 = $validatedData['k4'];
            $kuisioner->k5 = $validatedData['k5'];
            $kuisioner->k6 = $validatedData['k6'];
            $kuisioner->k7 = $validatedData['k7'];
            $kuisioner->save();

            return redirect()->back()->with('success', 'Data karyawan berhasil disimpan.');
        }

        // Jika karyawan tidak ditemukan
        return redirect()->back()->with('success', 'Data karyawan tidak ditemukan.');
    }
    public function download() {}
}
