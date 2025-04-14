<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    // public function getWilayah(Request $request)
    // {
    //     $kode = $request->kode;

    //     // Menentukan panjang kode selanjutnya
    //     $panjang = strlen($kode) + ($kode ? 3 : 2); // 2->Prov, 5->Kab, 8->Kec, 13->Kel

    //     $data = Wilayah::where('kode', 'like', $kode . '%')
    //         ->whereRaw('CHAR_LENGTH(kode) = ' . $panjang)
    //         ->orderBy('nama')
    //         ->get();

    //     return response()->json($data);
    // }
}
