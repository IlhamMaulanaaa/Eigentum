<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Type;
use Exception;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index()
    {
        $data = Type::all();
        $tables = (new Type())->getTable();
        

        if ($data) {
            return view('admin.type.all', ['types' => $data , 'tables' => $tables]);
        }
    }


    public function create()
    {
        return view('admin.type.create');
    }


    public function store(Request $request, Type $type)
    {
        $type->name = $request->name;
        $type->save();

        return redirect("admin/type/data")->with('success', 'Status created successfully.');
    }


    public function show(Type $type)
    {
        return view('admin.type.detail', [
            'type' => $type,
        ]);
    }


    public function edit(Type $type)
    {
        return view('admin.type.edit', [
            'type' => $type
        ]);
    }


    public function update(Request $request, Type $type)
    {
        $type->name = $request->name;
        $type->save();

        return redirect("admin/type/data")->with('success', 'Status updated successfully.');
    }


    public function destroy(Type $type)
    {
        $type->delete();

        return redirect("admin/type/data")->with('success', 'Status deleted successfully.');
    }
}
