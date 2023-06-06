<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
use App\Models\AgentProperty;
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
    public function create(Request $request, $developerId){

        $developer = Developer::findOrfail($developerId);
        $type = Type::all();
        $agent = Agent::all();

        return view('admin.property.create',compact('type','developer','agent'));
    }

    public function store(Request $request, $developerId)
    {
        try{

            
            $request->validate([
                'property'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                'type_id'   => 'required',
            ]);
            
            $developer = Developer::findOrfail($developerId);
            if (!$developer) {
                return redirect()->back()->with('error', 'Developer tidak ditemukan');
            }

            // $agent = Agent::inRandomOrder()->first();
            // if (!$agent) {
            //     return redirect()->back()->with('error', 'Tidak ada agen yang tersedia');
            // }
    
            $randomAgentId = Agent::pluck('id')->random();

            $data = Property::create([
                'property'  => $request->property,
                'description'   => $request->description,
                'address'   => $request->address,
                'type_id'   => $request->type_id,
                'developer_id'  => $developer->id,
                // 'agent_id' => $randomAgentId,
            ]);

            // $data = AgentProperty::create([
            //     'agent_id'  => $agent->id,
            //     'property_id' => $data->id,
            // ]);

            $data->agents()->attach($randomAgentId);

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
            $property->units()->delete();
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
