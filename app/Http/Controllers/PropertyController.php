<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Property;
use Exception;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Property::all();
        $tables = (new Property())->getTable();

        if($data){
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.property.all', ['property' => $data, "tables" => $tables]);
        }else{
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.property.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'unit'  => 'required',
                'property'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                // 'type_id'   => 'required',
                // 'developer_id'  => 'required',
                // 'agent_id'  => 'required',
            ]);

            $data = Property::create([
                'unit'  => $request->unit,
                'property'  => $request->property,
                'description'   => $request->description,
                'address'   => $request->address,
                // 'type_id'   => $request->type_id,
                // 'developer_id'  => $request->developer_id,
                // 'agent_id'  => $request->agent_id,
            ]);

            if($data){
                return ApiFormatter::createApi('200', 'Success', $data). redirect('/admin/property/data',);
            }else{
                return ApiFormatter::createApi('400', 'Failed', null);
            }
        }catch(Exception $e){
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $property)
    {
        return view('admin.property.detail',[
            'property' => $property,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('admin.property.edit',[
            'property' => $property,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'unit'  => 'required',
                'property'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                // 'type_id'   => 'required',
                // 'developer_id'  => 'required',
                // 'agent_id'  => 'required',
            ]);

            $property = Property::findOrfail($id);

            $data = Property::where('id',$property->id)->update([
                'unit'  => $request->unit,
                'property'  => $request->property,
                'description'   => $request->description,
                'address'   => $request->address,
                // 'type_id'   => $request->type_id,
                // 'developer_id'  => $request->developer_id,
                // 'agent_id'  => $request->agent_id,
            ]);

            $data = Property::where('id','=', $property->id)->get();


            if($data){
                return ApiFormatter::createApi('200', 'Success', $data). redirect('/admin/property/data',);
            }else{
                return ApiFormatter::createApi('400', 'Failed', null);
            }
        }catch(Exception $e){
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function destroy(string $id)
    {
        try{
            $property = Property::findOrfail($id);

            $data = $property->delete();
            if($data){
                return ApiFormatter::createApi('200', 'Success', $data). redirect('/admin/unit/data',);
            }else{
                return ApiFormatter::createApi('400', 'Failed', null);
            }
        }catch(Exception $e){
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }
}
