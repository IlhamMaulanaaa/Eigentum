<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Type;
use App\Models\Unit;
use App\Models\Agent;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Property;
use App\Models\Province;
use App\Models\Developer;
use App\Helper\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\PropertyAgent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::filter(request(['search', 'developer_id', 'regency_id']))->paginate(10);
        $tables = (new Property())->getTable();
        $developers = Developer::all()->pluck('company', 'id');;;
        $pivotTable = (new Property())->regencies()->getTable();

        // Mendapatkan regencies yang terhubung deng  an developer melalui tabel pivot
        $regencies = Regency::whereIn('id', function ($query) use ($pivotTable) {
            $query->select('regency_id')
                ->from($pivotTable);
        })->pluck('name', 'id');

        if ($properties) {
            return view('admin.property.all', compact('properties', 'tables', 'developers', 'regencies'));
        }
    }



    public function create(Request $request, $developerId)
    {
        $developer = Developer::findOrfail($developerId);
        $type = Type::all();
        $agent = Agent::all();
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('admin.property.create', compact('type', 'developer', 'agent', 'provinces', 'regencies', 'districts', 'villages'));
    }

    public function createFront(Request $request)
    {

        $type = Type::all();
        $agent = Agent::all();
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('pages.property.create', compact('type',  'agent', 'provinces', 'regencies', 'districts', 'villages'));
    }

    public function store(Request $request, $developerId)
    {
        try {
            $request->validate([
                'title'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
                'type_id'   => 'required',
                // 'province_id' => 'required',
                // 'regency_id' => 'required',
                // 'district_id' => 'required',
                // 'village_id' => 'required',
            ]);

            $developer = Developer::findOrfail($developerId);
            if (!$developer) {
                return redirect()->back()->with('error', 'Developer tidak ditemukan');
            }
            
            $imageField = $request->file('image');
            $imageNames = [];
            if ($imageField) {
                $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
                $imageNames[] = $imageName;
                $imageField->storeAs('public', $imageName);
            }

            $property = Property::create([
                'title'  => $request->title,
                'description'   => $request->description,
                'address'   => $request->address,
                'image' => $$imageNames,
                'type_id'   => $request->type_id,
                'developer_id'  => $developer->id,
                // 'agent_id' => $randomAgentId,
            ]);
            
            $regencyId = $request->regencies_id;
            $randomAgent = Agent::whereHas('regencies', function ($query) use ($regencyId) {
                $query->where('regency_id', $regencyId);
            })->inRandomOrder()->first();

            if ($randomAgent) {
                $property->agents()->attach($randomAgent->id);
            } else {
                $property->save();
            }

            $property->save();
            $property->provinces()->attach($request->provinces_id);
            $property->regencies()->attach($request->regencies_id);
            $property->districts()->attach($request->districts_id);
            $property->villages()->attach($request->villages_id);

            return redirect(route('property.index'));

            if (Auth::user()->role == "admin") {
                return redirect(route('property.index'));
            } else {
                return redirect(route('developer.dashboard'));
            }
        } catch (Exception $e) {
            return $e;
        }
    }
    public function storeFront(Request $request)
    {
        // try {
            $request->validate([
                'title'  => 'required',
                'description'   => 'required',
                'address'   => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
                'type_id'   => 'required',
                // 'province_id' => 'required',
                // 'regency_id' => 'required',
                // 'district_id' => 'required',
                // 'village_id' => 'required',
            ]);

            // $user = Auth::user();
            $developer = Auth::user()->developers;

            $imageField = $request->file('image');
            $imageNames = [];
            if ($imageField) {
                $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
                $imageNames[] = $imageName;
                $imageField->storeAs('public', $imageName);
            }

            $property = Property::create([
                'title' => $request->title,
                'description' => $request->description,
                'address'   => $request->address,
                'image' => $imageNames[0],
                'type_id'   => $request->type_id,
                'developer_id'  => $developer->pluck('id')->first(),
            ]);


            $regencyId = $request->regencies_id;
            $randomAgent = Agent::whereHas('regencies', function ($query) use ($regencyId) {
                $query->where('regency_id', $regencyId);
            })->inRandomOrder()->first();

            if ($randomAgent) {
                $property->agents()->attach($randomAgent->id);
            } else {
                $property->save();
            }

            $property->save();
            $property->provinces()->attach($request->provinces_id);
            $property->regencies()->attach($request->regencies_id);
            $property->districts()->attach($request->districts_id);
            $property->villages()->attach($request->villages_id);

            if (Auth::user()->role == "admin") {
                return redirect(route('property.index'));
            } else {
                return redirect(route('developer.dashboard'));
            }
        // } catch (Exception $e) {
        //     return $e;
        // }
    }


    public function show(Property $property)
    {
        return view('admin.property.detail', [
            'property' => $property,
        ]);
    }

    public function showFront(Property $property)
    {
        // if (Auth::user()->developer->id !== $property->developer_id) {
        //     return redirect()->route('dashboard')->with('error', 'Anda tidak memiliki akses ke property ini.');
        // }
        // $property = Property::where('id', $property->id);
        $units = Unit::where('property_id', $property->id)->get();

        return view('pages.property.detail', compact('property', 'units'));
    }

    public function edit(Property $property)
    {
        if (Auth::user()->role == "admin") {
            return view('admin.property.edit', [
                'property' => $property,
                'type' => Type::all(),
                'developer' => Developer::all(),
                'agent' => Agent::all(),
            ]);
        } else {
            return view('pages.property.edit', [
                'property' => $property,
                'type' => Type::all(),
                'developer' => Developer::all(),
                'agent' => Agent::all(),
            ]);
        }
    }



    public function update(Request $request, string $id)
    {

        $request->validate([
            'title'  => 'nullable',
            'description'   => 'nullable',
            'address'   => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'type_id'   => 'nullable',
        ]);

        $property = Property::findOrfail($id);

        $property->update([
            'title'  => $request->title,
            'description'   => $request->description,
            'address'   => $request->address,
            'type_id'   => $request->type_id,
        ]);

        $image = 'image';
        if ($request->hasFile($image)) {
            // Hapus gambar lama jika sudah ada
            if ($property->$image) {
                Storage::delete('public/' . $property->$image);
            }

            // Simpan gambar baru
            $imageField = $request->file($image);
            $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
            $imageField->storeAs('public', $imageName);
            $property->$image = $imageName;
        }

        // $property->agents()->sync($request->input('agent_id'));

        $property = Property::where('id', '=', $property->id)->get();
        // return redirect(route('property.show', $id));
        if (Auth::user()->role == "admin") {
            return redirect(route('property.show', $id));
        } else {
            return redirect(route('developer.dashboard'));
        }
    }



    public function destroy(string $id)
    {
        $property = Property::findOrfail($id);
        foreach ($property->units as $unit) {
            foreach ($unit->images() as $image) {
                $imagePath = 'storage/' . $image->image;
                Storage::delete($imagePath);
                $image->delete();
            }
            $unit->specifications()->delete();
            $unit->statuses()->detach();
            $unit->delete();
        }
        // $property->types()->delete();
        $property->provinces()->detach();
        $property->regencies()->detach();
        $property->districts()->detach();
        $property->villages()->detach();
        $property->agents()->detach();
        $property->delete();

        // return  redirect(route('property.index'));
        if (Auth::user()->role == "developer") {
            return redirect(route('developer.dashboard'));
        } else {
            return redirect(route('property.index'));
        }
    }
}
