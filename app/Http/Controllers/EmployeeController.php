<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use App\Models\employee;
use App\Models\Employee as ModelsEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
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
        $validated = $request->validate([
            'nik_karyawan' => 'required|numeric|digits_between:5,20',
            'nama_lengkap' => 'required|string|max:100',
            'nik_ktp' => 'required|numeric|digits:16',
            'no_hp' => 'required|numeric',
            'no_hp_keluarga' => 'required|numeric',
            'status_keluarga' => 'required|string',
            'nama_ibu' => 'required|string|max:100',
            'gol_darah' => 'required|in:A,B,AB,O',
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
            'nama_anak' => 'nullable|string',
            'tanggal_lahir_anak' => 'nullable|date',
        ]);

        Employee::create($validated);

        // Simpan data atau lakukan sesuatu...
        return back()->with('success', 'Data berhasil disimpan!');
    }
}
