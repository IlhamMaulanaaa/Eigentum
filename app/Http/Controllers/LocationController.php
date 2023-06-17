<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{

    public function index()
    {
        $locations = DB::table('locations')->paginate(10);
        $tables = (new Location())->getTable();

        if ($locations) {
            return view('admin.location.all', compact('locations', 'tables'));
        }
    }


    public function create()
    {
        return view('admin.location.create');
    }


    public function store(Request $request, Location $location)
    {
    
        $location->name = $request->name;

        $location->save();

        return redirect('admin/location/data')->with('success', 'Location created successfully.');
    }


    public function show(Location $location)
    {
        return view('admin.location.detail', compact('location'));
    }

   
    public function edit(Location $location)
    {
        return view('admin.location.edit',compact('locatino'));
    }


    public function update(Request $request, Location $location)
    {
        $location->name = $request->name;
        $location->save();

        return redirect('admin/location/data')->with('success', 'Location created successfully.');
    }


    public function destroy(Location $location)
    {
        $location->delete();

        return redirect('admin/location/data')->with('success', 'Location created successfully.');
    }
}
