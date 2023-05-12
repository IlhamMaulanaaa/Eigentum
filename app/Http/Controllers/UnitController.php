<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
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
        $data = Unit::all();
        $tables = (new Unit())->getTable();

        if ($data) {
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.unit.all', ["units" => $data, "tables" => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.unit.create', [
            // "dokter" => Dokter::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'price' => 'required',
                'rent' => 'required',
                'image_1' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_2' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_3' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_4' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_plan' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'bloc' => 'required',
                'certificate' =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                // 'specification_id' => 'required',
                // 'properties_id' => 'required',
            ]);

            $imageName1 = $request->image_1->getClientOriginalName(). "." . $request->image_1->getClientOriginalExtension();
            $imageName2 = $request->image_2->getClientOriginalName(). "." . $request->image_2->getClientOriginalExtension();
            $imageName3 = $request->image_3->getClientOriginalName(). "." . $request->image_3->getClientOriginalExtension();
            $imageName4 = $request->image_4->getClientOriginalName(). "." . $request->image_4->getClientOriginalExtension();
            $imageName5 = $request->image_plan->getClientOriginalName(). "." . $request->image_plan->getClientOriginalExtension();
            $imageName6 = $request->certificate->getClientOriginalName(). "." . $request->certificate->getClientOriginalExtension();

            $data = Unit::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'rent' => $request->rent,   
                'image_1' => $imageName1,
                'image_2' => $imageName2,
                'image_3' => $imageName3,
                'image_4' => $imageName4,
                'image_plan' => $imageName5,
                'bloc' => $request->bloc,
                'certificate' => $imageName6,
                // 'specification_id' => $request->specification_id,
                // 'properties_id' => $request->properties_id,
            ]);

            Storage::disk('public')->put($imageName1, file_get_contents($request->image_1));
            Storage::disk('public')->put($imageName2, file_get_contents($request->image_2));
            Storage::disk('public')->put($imageName3, file_get_contents($request->image_3));
            Storage::disk('public')->put($imageName4, file_get_contents($request->image_4));
            Storage::disk('public')->put($imageName5, file_get_contents($request->image_plan));
            Storage::disk('public')->put($imageName6, file_get_contents($request->certificate));

            $data = Unit::where('id', '=', $data->id)->get();

            if ($data) {
                return ApiFormatter::createApi('201', 'Created', $data).redirect('/admin/unit/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
            // return ApiFormatter::createApi('200', 'Data Created', $data);
            return view('admin.unit.detail', [
                "unit" => $unit
            ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unit $unit)
    {
        return view('admin.unit.edit', [
            "unit" => $unit
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'price' => 'required',
                'rent' => 'required',
                'image_1' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_2' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_3' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_4' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'image_plan' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'bloc' => 'required',
                'certificate' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                // 'specification_id' => 'required',
                // 'properties_id' => 'required',
            ]);

            $data = Unit::findOrfail($id);

            $data->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'rent' => $request->rent,
                'bloc' => $request->bloc,
                // 'specification_id' => $request->specification_id,
                // 'properties_id' => $request->properties_id,
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
        } catch (Exception $e) {
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
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
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }
}