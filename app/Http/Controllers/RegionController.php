<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use App\Models\District;
use App\Models\Province;
use App\Models\Village;
use App\Models\Wilayah;
use Illuminate\Http\Request;

class RegionController extends Controller
{

    public function provinsi()
    {
        $data = Province::where('name', 'LIKE', '%' . request('q') . '%')->paginate(0);

        return response()->json($data);
    }

    public function cities($id)
    {
        $data = Cities::where('province_code', $id)->where('name', 'LIKE', '%' . request('q') . '%')->paginate(20);

        return response()->json($data);
    }

    public function district($id)
    {
        $data = District::where('city_code', $id)->where('name', 'LIKE', '%' . request('q') . '%')->paginate(20);

        return response()->json($data);
    }

    public function village($id)
    {
        $data = Village::where('district_code', $id)->where('name', 'LIKE', '%' . request('q') . '%')->paginate(20);

        return response()->json($data);
    }
}
