<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = DB::table('locations')->paginate(10);
        $tables = (new Location())->getTable();

        if ($locations) {
            return view('admin.location.all', compact('locations', 'tables'));
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'location' => 'required',
        ]);

        $location = new Location();
        $location->location = $request->location;

        $location->save();

        return redirect('admin/location/data')->with('success', 'Location created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('admin.location.detail', [
            "location" => $location,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('admin.location.edit', [
            "location" => $location,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'location' => 'required',
        ]);

        $location->location = $request->location;

        $location->save();

        return redirect('admin/location/data')->with('success', 'Location created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->delete();

        return redirect('admin/location/data')->with('success', 'Location created successfully.');
    }
}
