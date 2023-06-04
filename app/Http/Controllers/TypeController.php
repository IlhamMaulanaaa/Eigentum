<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Type;
use Exception;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Type::all();
        $tables = (new Type())->getTable();
        

        if ($data) {
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.type.all', ['types' => $data , 'tables' => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Type $type)
    {
        $type->name = $request->name;
        $type->save();

        return redirect("admin/type/data")->with('success', 'Status created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view('admin.type.detail', [
            'type' => $type,
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view('admin.type.edit', [
            'type' => $type
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $type->name = $request->name;
        $type->save();

        return redirect("admin/type/data")->with('success', 'Status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect("admin/type/data")->with('success', 'Status deleted successfully.');
    }
}
