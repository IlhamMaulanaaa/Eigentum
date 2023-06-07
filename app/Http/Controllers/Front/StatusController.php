<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = status::all();
        $tables = (new status())->getTable();

        if ($statuses) {
            return view('admin.status.all', compact("statuses", "tables"));
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Status $status)
    {
        $status->name = $request->name;
        $status->save();

        return redirect("admin/status/data")->with('success', 'Status created successfully.');
    }

    public function show(Status $status)
    {
        return view('admin.status.detail', compact('status'));
    }

    public function edit(Status $status)
    {
        return view('admin.status.edit', compact('status'));
    }

    public function update(Request $request, Status $status)
    {
        $status->name = $request->name;
        $status->save();

        return redirect("admin/status/data")->with('success', 'Status updated successfully.');
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return redirect("admin/status/data")->with('success', 'Status deleted successfully.');
    }
}
