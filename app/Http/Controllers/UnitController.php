<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Property;
use App\Models\Specification;
use App\Models\Unit;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\File;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $units = Unit::all();
        $tables = (new Unit())->getTable();

        if ($units) {
            return view('admin.unit.all', compact("units", "tables"));
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    

    $request->validate([
        'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'rent' => 'required',
            'image_1' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'image_2' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'image_3' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'image_4' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'image_plan' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'bloc' => 'required',
            'certificate' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'property_id' => 'required',
        ]);

        $imageNames = [];

        foreach (['image_1', 'image_2', 'image_3', 'image_4', 'image_plan', 'certificate'] as $fieldName) {
            $imageName = $request->$fieldName->getClientOriginalName() . "." . $request->$fieldName->getClientOriginalExtension();
            $imageNames[] = $imageName;
            $request->$fieldName->storeAs('public', $imageName);
        }

        $data = Unit::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'rent' => $request->rent,
            'image_1' => $imageNames[0],
            'image_2' => $imageNames[1],
            'image_3' => $imageNames[2],
            'image_4' => $imageNames[3],
            'image_plan' => $imageNames[4],
            'bloc' => $request->bloc,
            'certificate' => $imageNames[5],
            'property_id' => $request->property_id,
        ]);
        
        $data->save();
        
        $request->validate([
            'bedroom' => 'required',
            'bathroom' => 'required',
            'surface_area'  => 'required',
            'building_area' => 'required',
            'floor' => 'required',
        ]);

        $specification = Specification::create([
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'surface_area'  => $request->surface_area,
            'building_area' => $request->building_area,
            'floor' => $request->floor,
            'unit_id'   => $data->id,
        ]);

        $specification->save();

        if ($data&&$specification) {
            return redirect('/admin/unit/data');
        } else {
            return response()->json(['message' => 'Bad Request'], 400);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
            // return ApiFormatter::createApi('200', 'Data Created', $data);
            return view('admin.unit.detail', [
                "unit" => $unit,
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('admin.unit.edit', [
            "unit" => $unit,
            // "specification" => Specification::all(),
            "property" => Property::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'title' => 'nullable',
                'description' => 'nullable',
                'price' => 'nullable',
                'rent' => 'nullable',
                'image_1' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_2' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_3' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_4' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_plan' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'bloc' => 'nullable',
                'certificate' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'specification_id' => 'nullable',
                'property_id' => 'nullable',
            ]);

            $data = Unit::findOrfail($id);

            $data->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'rent' => $request->rent,
                'bloc' => $request->bloc,
                    'property_id' => $request->property_id,
            ]);

            $images = ['image_1', 'image_2', 'image_3', 'image_4', 'image_plan', 'certificate'];
                foreach ($images as $key => $image) {
                    if ($request->hasFile($image)) {
                        $imageName = $request->{$image}->getClientOriginalName(). "." . $request->{$image}->getClientOriginalExtension();
                        $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->{$image}));
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        $data->{$image} = $imageName;
                    }
            }

            $data->save();

            $data = Unit::where('id', '=', $data->id)->get();
            $url = '/admin/unit/show/' . $id;

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Update', $data).redirect($url);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        }catch(Exception $e){
            return $e;
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $unit = Unit::findOrfail($id);
            $data = $unit->delete();

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Deleted', null) . redirect('/admin/unit/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return $e;
        }
    }
}
