<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\District;
use App\Models\Wilayah;
use App\Models\employee;
use App\Models\Employee as ModelsEmployee;
use App\Models\Province;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with(['province', 'cities', 'district', 'village'])->get();

        return view('pages.updateData.index', compact('employees'));
    }

    public function create()
    {
        $provinsi = Wilayah::whereRaw('CHAR_LENGTH(kode) = 2')->orderBy('nama')->get();
        // $kabupaten = Wilayah::whereRaw('CHAR_LENGTH(kode) = 5')->orderBy('nama')->get();
        // $kecamatan = Wilayah::whereRaw('CHAR_LENGTH(kode) = 8')->orderBy('nama')->get();
        // $kelurahan = Wilayah::whereRaw('CHAR_LENGTH(kode) = 13')->orderBy('nama')->get();
        return view('pages.updateData.form', compact('provinsi'));
        // return view('pages.updateData.form');
    }

    public function selectedWilayah(Request $request)
    {
        $kode = $request->kode;

        if (!$kode) {
            return response()->json([]);
        }

        // Tentukan panjang kode wilayah berikutnya
        $panjang = strlen($kode) + ($kode == '' ? 2 : (strlen($kode) == 2 ? 3 : (strlen($kode) == 5 ? 3 : 5)));

        $data = Wilayah::where('kode', 'like', $kode . '%')
            ->whereRaw('CHAR_LENGTH(kode) = ' . $panjang)
            ->orderBy('nama')
            ->get();

        return response()->json($data);
    }


    public function store(Request $request)
    {

        // dd($request->sum_children);
        $request->merge([
            'rt' => (string) $request->rt,
            'rw' => (string) $request->rw,
        ]);

        $months = [
            'Januari' => '01',
            'Februari' => '02',
            'Maret' => '03',
            'April' => '04',
            'Mei' => '05',
            'Juni' => '06',
            'Juli' => '07',
            'Agustus' => '08',
            'September' => '09',
            'Oktober' => '10',
            'November' => '11',
            'Desember' => '12'
        ];

        $month = strtolower($request->month);
        $monthNumber = $months[$month] ?? '01'; // Default to '01' if month is invalid

        if (!is_numeric($request->year)) {
            $request->merge(['year' => (int) $request->year]);
        }

        if (!is_numeric($request->day)) {
            $request->merge(['day' => (int) $request->day]);
        }

        $birthdate = sprintf('%04d-%02d-%02d', $request->year, $monthNumber, $request->day);
        $request->merge(['birthdate' => $birthdate]);


        $request->validate(
            [
                'employee_id' => 'required|numeric',
                'fullname' => 'required|string|max:150',
                'national_id' => 'required|numeric|digits:16',
                'phone_number' => 'required|numeric',
                'family_phone_number' => 'required|numeric',
                'family_relation' => 'required|string',
                'biological_mother_name' => 'required|string|max:100',
                'blood_type' => 'required|in:A,B,AB,O',
                'gender' => 'required|string|in:Laki-laki,Perempuan',
                'religion' => 'required|string|in:Islam,Kristen,Katholik,Hindu,Budha,Konghucu',
                'birthdate' => 'required|date',
                'birthplace' => 'required|string',
                'npwp' => 'nullable|string',
                'email' => 'required|email',

                'address' => 'required|string',
                'province' => 'required|string',
                'city' => 'required|string',
                'district' => 'required|string',
                'village' => 'required|string',
                'rt' => 'required|numeric',
                'rw' => 'required|numeric',

                'residence' => 'required|string',
                'domicile' => 'required|string',

                'marital_status' => 'required|string',
                'spouse_name' => 'required_if:marital_status,Kawin',
                'sum_children' => 'nullable|numeric',
                'child_name' => 'required_unless:sum_children,0|array',
                'child_name.*' => 'required_unless:sum_children,0|string|max:255',
                'child_birthdate' => 'required_unless:sum_children,0|array',
                'child_birthdate.*' => 'required_unless:sum_children,0|date',
            ],
            [
                'employee_id.required' => 'NIK Karyawan harus diisi.',
                'employee_id.numeric' => 'NIK Karyawan harus berupa angka.',
                'employee_id.digits_between' => 'NIK Karyawan harus terdiri dari 5 hingga 20 digit.',
                'fullname.required' => 'Nama Lengkap harus diisi.',
                'national_id.required' => 'NIK KTP harus diisi.',
                'national_id.numeric' => 'NIK KTP harus berupa angka.',
                'national_id.digits' => 'NIK KTP harus terdiri dari 16 digit.',
                'phone_number.required' => 'Nomor HP harus diisi.',
                'phone_number.numeric' => 'Nomor HP harus berupa angka.',
                'family_phone_number.required' => 'Nomor HP Keluarga harus diisi.',
                'family_phone_number.numeric' => 'Nomor HP Keluarga harus berupa angka.',
                'family_relation.required' => 'Status Keluarga harus diisi.',
                'biological_mother_name.required' => 'Nama Ibu harus diisi.',
                'blood_type.required' => 'Golongan Darah harus diisi.',
                'blood_type.in' => 'Golongan Darah harus salah satu dari A, B, AB, O.',
                'domicile.required' => 'Alamat Domisili harus diisi.',
                'marital_status.required' => 'Status Pernikahan harus diisi.',
                'spouse_name.required_if' => 'Nama Pasangan harus diisi jika status pernikahan Kawin.',
                'sum_children.numeric' => 'Jumlah Anak harus berupa angka.',
                'sum_children.required_if' => 'Jumlah Anak harus diisi jika ada anak.',
                'child_name.required_if' => 'Nama Anak harus diisi jika ada anak.',
                'child_name.*.string' => 'Nama Anak harus diisi.',
                'child_birthdate.required_if' => 'Tanggal Lahir Anak harus diisi jika ada anak.',
                'child_birthdate.*.date' => 'Tanggal Lahir Anak harus diisi.',
                'child_birthdate.*.required_if' => 'Tanggal Lahir Anak harus diisi jika ada anak.',
            ]
        );

        $request->merge([
            'province' => Province::where('code', $request->province)->value('name'),
            'city' => Cities::where('code', $request->city)->value('name'),
            'district' => District::where('code', $request->district)->value('name'),
            'village' => Village::where('code', $request->village)->value('name'),
        ]);

        // Proses data anak
        $children = [];
        if ($request->sum_children > 0 && $request->has('child_name') && $request->has('child_birthdate')) {
            for ($i = 0; $i < $request->sum_children; $i++) {
                // Pastikan data tidak kosong
                if (!empty($request->child_name[$i]) && !empty($request->child_birthdate[$i])) {
                    $children[] = [
                        'child_name' => $request->child_name[$i],
                        'child_birthdate' => $request->child_birthdate[$i],
                    ];
                }
                echo $request->child_name[$i] . '-' . $request->child_birthdate[$i];
            }
        }

        // Simpan data karyawan
        $karyawan = new Employee();
        $karyawan->number_of_employees = $request->employee_id;
        $karyawan->name = $request->fullname;
        $karyawan->national_id = $request->national_id;
        $karyawan->email = $request->email;
        $karyawan->phone = $request->phone_number;
        $karyawan->family_phone_number = $request->family_phone_number;
        $karyawan->family_status = $request->family_relation;
        $karyawan->biological_mothers_name = $request->biological_mother_name;
        $karyawan->blood_type = $request->blood_type;
        $karyawan->gender = $request->gender;
        $karyawan->religion = $request->religion;
        $karyawan->date_of_birth = $request->birthdate;
        $karyawan->place_of_birth = $request->birthplace;
        $karyawan->npwp = $request->npwp;

        $karyawan->address = $request->address;
        $karyawan->address_province = $request->province;
        $karyawan->address_city = $request->city;
        $karyawan->address_district = $request->district;
        $karyawan->address_village = $request->village;
        $karyawan->address_rt = $request->rt;
        $karyawan->address_rw = $request->rw;

        $karyawan->residence = $request->residence;
        $karyawan->domicile = $request->domicile;

        $karyawan->marital_status = $request->marital_status;
        $karyawan->spouse_name = $request->spouse_name;

        $karyawan->number_of_children = $request->sum_children;
        $karyawan->children_json = json_encode($children); // simpan dalam bentuk JSON
        $karyawan->save();

        return redirect()->back()->with('success', 'Data karyawan berhasil disimpan.');
    }
}
