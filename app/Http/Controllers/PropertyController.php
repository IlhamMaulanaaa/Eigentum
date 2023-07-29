<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
use App\Models\District;
use App\Models\PropertyAgent;
use App\Models\Developer;
use App\Models\Property;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Type;
use App\Models\Unit;
use App\Models\Village;
use Exception;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::paginate(10);
        $tables = (new Property())->getTable();

        if($properties){
            return view('admin.property.all', compact('properties','tables'));
        }
    }


    public function create(Request $request, $developerId){

        $developer = Developer::findOrfail($developerId);
        $type = Type::all();
        $agent = Agent::all();
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('admin.property.create',compact('type','developer','agent', 'provinces', 'regencies', 'districts', 'villages'));
    }

    public function store(Request $request, $developerId)
    {
            $request->validate([
                'title'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                'type_id'   => 'required',
            ],[
                'title.required' => 'Nama property tidak boleh kosong',
                'description.required' => 'Deskripsi tidak boleh kosong',
                'address.required' => 'Alamat tidak boleh kosong',
            ]);
            
            $developer = Developer::findOrfail($developerId);
            if (!$developer) {
                return redirect()->back()->with('error', 'Developer tidak ditemukan');
            }

            // Ambil province_id dari tabel pivot agent_province berdasarkan agent_id
            $regencyId = $request->regencies_id;
            $randomAgent = Agent::whereHas('regencies', function ($query) use ($regencyId) {
                $query->where('regency_id', $regencyId);
            })->inRandomOrder()->first();

            if (!$randomAgent) {
                return redirect()->back()->with('error', 'Tidak ada agen yang tersedia untuk properti ini');
            }

            $property = Property::create([
                'title'  => $request->title,
                'description'   => $request->description,
                'address'   => $request->address,
                'type_id'   => $request->type_id,
                'developer_id'  => $developer->id,
                // 'agent_id' => $randomAgentId,
            ]);

            // $property = PropertyAgent::create([
            //     'agent_id'  => $agent->id,
            //     'property_id' => $property->id,
            // ]);

            $property->agents()->attach($randomAgent->id);
            $developer->provinces()->attach($request->provinces_id);
            $developer->regencies()->attach($request->regencies_id);
            $developer->districts()->attach($request->districts_id);
            $developer->villages()->attach($request->villages_id);

            if($property){
                return redirect(route('property.index'));
            }
    }


    public function show(Property $property)
    {
        return view('admin.property.detail',[
            'property' => $property,
        ]);
    }

    public function edit(Property $property)
    {
        return view('admin.property.edit',[
            'property' => $property,
            'type' => Type::all(),
            'developer' => Developer::all(),
            'agent' => Agent::all(),
        ]);
    }


    
    public function update(Request $request, string $id)
    {
        
            $request->validate([
                'title'  => 'nullable',
                'description'   => 'nullable',
                'address'   => 'nullable',
                'type_id'   => 'nullable',
                'developer_id'  => 'nullable',
            ]);

            $property = Property::findOrfail($id);

            $property->update([
                'title'  => $request->title,
                'description'   => $request->description,
                'address'   => $request->address,
                'type_id'   => $request->type_id,
                'developer_id'  => $request->developer_id,
            ]);

            // $property->agents()->sync($request->input('agent_id'));

            $property = Property::where('id','=', $property->id)->get();
            $url = '/admin/property/show/' . $id;

            return redirect($url);
        
    }


    
    public function destroy(string $id)
    {
        
            $property = Property::findOrfail($id);
            $property->units()->delete();
            $property->agents()->detach();
            $property->delete();

            return  redirect(route('property.index'));
            

    }
}
