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
        $request->merge([
            'rt' => (string) $request->rt,
            'rw' => (string) $request->rw,
        ]);

        $months = [
            'januari' => '01',
            'februari' => '02',
            'maret' => '03',
            'april' => '04',
            'mei' => '05',
            'juni' => '06',
            'juli' => '07',
            'agustus' => '08',
            'september' => '09',
            'oktober' => '10',
            'november' => '11',
            'desember' => '12'
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

        $request->merge([
            'provinsi' => Province::where('code', $request->provinsi)->value('name'),
            'kota' => Cities::where('code', $request->kota)->value('name'),
            'kecamatan' => District::where('code', $request->kecamatan)->value('name'),
            'kelurahan' => Village::where('code', $request->kelurahan)->value('name'),
        ]);

        $request->validate([
            'nik_karyawan' => 'required|numeric|digits_between:5,20',
            'nama_lengkap' => 'required|string|max:100',
            'nik_ktp' => 'required|numeric|digits:16',
            'no_hp' => 'required|numeric',
            'no_hp_keluarga' => 'required|numeric',
            'status_keluarga' => 'required|string',
            'nama_ibu' => 'required|string|max:100',
            'gol_darah' => 'required|in:A,B,AB,O',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'religion' => 'required|string|in:Islam,Kristen,Katholik,Hindu,Budha,Konghucu',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string',
            'npwp' => 'nullable|string',
            'email' => 'required|email',

            'alamat_ktp' => 'required|string',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'rt' => 'required|numeric',
            'rw' => 'required|numeric',

            'tinggal_di' => 'required|string',
            'alamat_domisili' => 'required|string',

            'status_pernikahan' => 'required|string',
            'nama_pasangan' => 'nullable|string',
            'jumlah_anak' => 'nullable|numeric',
            'nama_anak' => 'nullable|array',
            'nama_anak.*' => 'nullable|string|max:255',
            'tanggal_lahir_anak' => 'nullable|array',
            'tanggal_lahir_anak.*' => 'nullable|date',
        ]);

        // Proses data anak
        $anak = [];
        if ($request->jumlah_anak > 0 && $request->has('nama_anak') && $request->has('tanggal_lahir_anak')) {
            for ($i = 0; $i < $request->jumlah_anak; $i++) {
                // Pastikan data tidak kosong
                if (!empty($request->nama_anak[$i]) && !empty($request->tanggal_lahir_anak[$i])) {
                    $anak[] = [
                        'nama' => $request->nama_anak[$i],
                        'tanggal_lahir' => $request->tanggal_lahir_anak[$i],
                    ];
                }
            }
        }

        // Simpan data karyawan
        $karyawan = new Employee();
        $karyawan->number_of_employees = $request->nik_karyawan;
        $karyawan->name = $request->nama_lengkap;
        $karyawan->national_id = $request->nik_ktp;
        $karyawan->email = $request->email;
        $karyawan->phone = $request->no_hp;
        $karyawan->family_phone_number = $request->no_hp_keluarga;
        $karyawan->family_status = $request->status_keluarga;
        $karyawan->biological_mothers_name = $request->nama_ibu;
        $karyawan->blood_type = $request->gol_darah;
        $karyawan->gender = $request->gender;
        $karyawan->religion = $request->religion;
        $karyawan->date_of_birth = $request->birthdate;
        $karyawan->place_of_birth = $request->birthplace;
        $karyawan->npwp = $request->npwp;

        $karyawan->address = $request->alamat_ktp;
        $karyawan->address_province = $request->provinsi;
        $karyawan->address_city = $request->kota;
        $karyawan->address_district = $request->kecamatan;
        $karyawan->address_village = $request->kelurahan;
        $karyawan->address_rt = $request->rt;
        $karyawan->address_rw = $request->rw;

        $karyawan->residence = $request->tinggal_di;
        $karyawan->domicile = $request->alamat_domisili;

        $karyawan->marital_status = $request->status_pernikahan;
        $karyawan->spouse_name = $request->nama_pasangan;

        $karyawan->number_of_children = $request->jumlah_anak;
        $karyawan->children_json = json_encode($anak); // simpan dalam bentuk JSON
        $karyawan->save();

        return redirect()->back()->with('success', 'Data karyawan berhasil disimpan.');
    }
}
