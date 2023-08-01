<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Specification;
use Exception;
use Illuminate\Http\Request;

class SpecificationController extends Controller
{

    public function index()
    {
        $data = Specification::all();
        $tables = (new Specification())->getTable();

        if ($data) {
            return view('admin.specification.all' , ['specifications' =>$data, 'tables' => $tables ]);
        }
    }


    public function create()
    {
        return view('admin.specification.create');
    }


    public function store(Request $request)
    {
        
            $request->validate([
                'bedroom' => 'required',
                'bathroom' => 'required',
                'surface_area'  => 'required',
                'building_area' => 'required',
                'floor' => 'required',
                // 'type_id'   => 'required',
            ]);

            $data = Specification::create([
                'bedroom' => $request->bedroom,
                'bathroom' => $request->bathroom,
                'surface_area'  => $request->surface_area,
                'building_area' => $request->building_area,
                'floor' => $request->floor,
                // 'type_id'   => $request->type_id,
            ]);

            if ($data) {
                return ApiFormatter::createApi('201', 'Created', $data).redirect('/admin/specification/data',);
            } 
        
    }



    public function show(Specification $specification)
    {
        return view('admin.specification.detail', [
            'specification' => $specification,
        ]);
    }

    public function edit(Specification $specification)
    {
        return view('admin.specification.edit', [
            'specification' => $specification
        ]);
    }



    public function update(Request $request, string $id)
    {
        
            $request->validate([
                'bedroom' => 'required',
                'bathroom' => 'required',
                'surface_area'  => 'required',
                'building_area' => 'required',
                'floor' => 'required',
            ]);

            $data = Specification::findOrfail($id);

            $data->update([
                'bedroom' => $request->bedroom,
                'bathroom' => $request->bathroom,
                'surface_area'  => $request->surface_area,
                'building_area' => $request->building_area,
                'floor' => $request->floor,
            ]);

            $data = Specification::where('id', '=', $data->id)->get();
            $url = '/admin/specification/show/' . $id;

            if ($data) {
                return ApiFormatter::createApi('200', 'Success', $data).redirect($url);
            } 

    }



    public function destroy(string $id)
    {
        
            $specification = Specification::findOrfail($id);
            $data = $specification->delete();

            if ($data) {
                return  redirect('/admin/specification/data',);
            } 
        
    }
}
