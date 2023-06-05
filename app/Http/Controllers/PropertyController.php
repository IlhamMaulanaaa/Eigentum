<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
use App\Models\Developer;
use App\Models\Property;
use App\Models\Type;
use App\Models\Unit;
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
            return view('admin.property.all', 
            ['properties' => $data, 
            'tables' => $tables,]);
        }else{
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.property.create',[
            'type' => Type::all(),
            'developer' => Developer::all(),
            'agent' => Agent::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'property'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                'type_id'   => 'required',
                // 'developer_id'  => 'required',
            ]);

            // buatkan function untuk mengisi otomsatis developer_id dari tabel developer
            $developer = Developer::findOrFail($request->developer_id);

            $data = Property::create([
                'property'  => $request->property,
                'description'   => $request->description,
                'address'   => $request->address,
                'type_id'   => $request->type_id,
                'developer_id'  => $developer->id,
            ]);

            $data->developers()->associate($developer);
            $data->save();

            $developer->properties()->save($data);

            $data = Property::where('id', '=', $data->id)->get();

            if($data){
                return redirect('/admin/property/data',);
            }else{
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        }catch(Exception $e){
            return $e;
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
            'type' => Type::all(),
            'developer' => Developer::all(),
            'agent' => Agent::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'property'  => 'nullable',
                'description'   => 'nullable',
                'address'   => 'nullable',
                'type_id'   => 'nullable',
                'developer_id'  => 'nullable',
            ]);

            $data = Property::findOrfail($id);

            $data->update([
                'property'  => $request->property,
                'description'   => $request->description,
                'address'   => $request->address,
                'type_id'   => $request->type_id,
                'developer_id'  => $request->developer_id,
            ]);

            $data->agents()->sync($request->input('agent_id'));

            $data = Property::where('id','=', $data->id)->get();
            $url = '/admin/property/show/' . $id;

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Update', $data).redirect($url);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return $e;
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
                return ApiFormatter::createApi('200', 'Data Deleted', null). redirect('/admin/property/data',);
            }else{
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        }catch(Exception $e){
            return $e;
        }
    }
}
