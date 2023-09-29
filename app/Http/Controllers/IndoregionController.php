<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
use App\Models\Village;

class IndoregionController extends Controller
{
    public function provinces()
    {
        $provinces = Province::all();
    }

    public function getregency(Request $request)
    {
        $province = Province::findOrfail($request->id);
        $provinces = $province->regencies->pluck('name', 'id');
        return response()->json($provinces);
    }

    public function getdistricts(Request $request)
    {
        $regency = Regency::findOrfail($request->id);
        $districts = $regency->districts->pluck('name', 'id');
        return response()->json($districts);
    }

    public function getvillages(Request $request)
    {
        $district = District::findOrfail($request->id);
        $villages = $district->villages->pluck('name', 'id');
        return response()->json($villages);
    }


}
