<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function index()
    {
        $statuses = status::all();
        $tables = (new status())->getTable();

        if ($statuses) {
            return view('admin.status.all', compact("statuses", "tables"));
        }
    }


    public function create()
    {
        return view('admin.status.create');
    }


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
