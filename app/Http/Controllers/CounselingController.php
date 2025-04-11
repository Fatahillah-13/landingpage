<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounselingController extends Controller
{
    public function index()
    {
        $jadwal = [
            ['waktu' => '08.00 - 09.00 WIB', 'status' => 'Tersedia'],
            ['waktu' => '09.00 - 10.00 WIB', 'status' => 'Tersedia'],
            ['waktu' => '10.00 - 11.00 WIB', 'status' => 'Tersedia'],
            ['waktu' => '11.00 - 11.30 WIB', 'status' => 'Tersedia'],
            ['waktu' => '13.00 - 14.00 WIB', 'status' => 'Tidak Tersedia'],
            ['waktu' => '13.00 - 14.00 WIB', 'status' => 'Tersedia'],
            ['waktu' => '14.00 - 15.00 WIB', 'status' => 'Tersedia'],
        ];
        return view('pages.counseling.counseling', compact('jadwal'));
    }

    public function store(Request $request)
    {
        // Simpan data ke database atau lakukan validasi
        return redirect()->back()->with('success', 'Konseling berhasil didaftarkan.');
    }
}
