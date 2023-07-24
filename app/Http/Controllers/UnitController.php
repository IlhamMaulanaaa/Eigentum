<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Unit;
use App\Models\Image;
use App\Models\Status;
use App\Models\Property;
use Illuminate\Support\Str;
use App\Helper\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\Specification;
use Illuminate\Support\Facades\Storage;


class UnitController extends Controller
{
    
    public function index()
    {
        $units = Unit::all();
        $tables = (new Unit())->getTable();

        if ($units) {
            return view('admin.unit.all', compact("units", "tables"));
        }
    }

    public function create(Request $request , $propertyId)
    {
        $property = Property::findOrfail($propertyId);
        $status = Status::all();

        return view('admin.unit.create', compact('property', 'status'));
    }

    public function store(Request $request,  $propertyId)
    {
        $request->validate([
                'title' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'bedroom' => 'required',
                'bathroom' => 'required',
                'surface_area' => 'required',
                'building_area' => 'required',
                'floor' => 'required',
                'livingroomimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                'bedroomimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                'bathroomimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                'kitchenimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                'etcimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
            ]);

            $property = Property::findOrfail($propertyId);
            if (!$property) {
                return redirect()->back()->with('error', 'Property tidak ditemukan');
            }

            $imageFieldName = $request->file('image');
            $imageNames = [];

            $imageName = $imageFieldName->getClientOriginalName() . "." . $imageFieldName->getClientOriginalExtension(); 
            $imageNames[] = $imageName;
            $imageFieldName->storeAs('public', $imageName);

            $unit = Unit::create([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'image' => $imageNames[0],
                'property_id' => $property->id,
            ]);

            $specification = Specification::create([
                'bedroom' => $request->bedroom,
                'bathroom' => $request->bathroom,
                'surface_area' => $request->surface_area,
                'building_area' => $request->building_area,
                'floor' => $request->floor,
                'unit_id' => $unit->id,
            ]);

            $images = [];
            $columns = ['livingroomimg', 'bedroomimg', 'bathroomimg', 'kitchenimg', 'etcimg'];

            foreach ($columns as $column) {
                $file = $request->file($column);
                if (!is_null($file)) {
                    $imageArray = [];
                    foreach ($file as $fieldName) {
                        $imageFileName = $fieldName->getClientOriginalName()  . "." . $fieldName->getClientOriginalExtension();
                        $imageArray[] = $imageFileName;
                        $fieldName->storeAs('public', $imageFileName);
                    }
                    $images[$column] = count($imageArray) > 0 ? implode("|", $imageArray) : null;
                }
            }

            $images = array_filter($images);

            $image = Image::create(array_merge($images, ['unit_id' => $unit->id]));


            $unit->save();
            $specification->save();
            $image->save();

            $unit->status()->attach($request->input('status_id'));

            return redirect('/admin/unit/data');

        
    }

    public function show(Unit $unit, Request $request)
    {
        $data = $request->all();
    
        $images = Image::where('unit_id', $unit->id)->first();

        return view('admin.unit.detail', compact('unit', 'images'));

    }

    
    public function edit(Unit $unit)
    {
        $properties = Property::all();
        $statuses = Status::all();

        return view('admin.unit.edit', compact('unit','statuses', 'properties'));
    }

    
    public function update(Request $request, string $id)
        {
            try{
                $data = $request->all();

                $unit = Unit::findOrfail($id);

                $request->validate([
                    'title' => 'required',
                    'description' => 'required',
                    'price' => 'required',
                    'property_id' => 'required',
                    'bedroom' => 'required',
                    'bathroom' => 'required',
                    'surface_area' => 'required',
                    'building_area' => 'required',
                    'floor' => 'required',
                    'livingroomimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                    'bedroomimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                    'bathroomimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                    'kitchenimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                    'etcimg.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg',
                ]);

                if ($request->hasFile('image')) {
                    $imageFieldName = $request->file('image');
                    $imageName = $imageFieldName->getClientOriginalExtension() . "." . $imageFieldName->getClientOriginalExtension();
                    $imageFieldName->storeAs('public', $imageName);
                    $unit->image = $imageName;
                }

                $unit->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'price' => $request->price,
                    'property_id' => $request->property_id,
                ]);

                $unit->save();

                $specification = Specification::findOrfail($id);

                $specification->update([
                    'bedroom' => $request->bedroom,
                    'bathroom' => $request->bathroom,
                    'surface_area'  => $request->surface_area,
                    'building_area' => $request->building_area,
                    'floor' => $request->floor,
                    'unit_id'   => $unit->id,
                ]);
    
                $specification->save();

                $image = Image::findOrFail($id);
                $columns = ['livingroomimg', 'bedroomimg', 'bathroomimg', 'kitchenimg', 'etcimg'];
            
                foreach ($columns as $column) {
                    $existingImages = explode('|', $image->{$column});
            
                    // Looping untuk mengupdate gambar yang sudah ada
                    foreach ($existingImages as $index => $existingImage) {
                        if ($request->hasFile($column . '_update.' . $index)) {
                            if (Storage::exists('public/' . $existingImage)) {
                                Storage::delete('public/' . $existingImage);
                            }
            
                            $uploadedImage = $request->file($column . '_update.' . $index);
                            $imageName = $uploadedImage . '.' . $uploadedImage->getClientOriginalExtension();
                            $uploadedImage->storeAs('public', $imageName);
                            $existingImages[$index] = $imageName;
                        }
                    }
            
                    // Menambahkan gambar baru jika ada
                    if ($request->hasFile($column . '_insert')) {
                        $uploadedImages = $request->file($column . '_insert');
                        $newImages = [];
            
                        foreach ($uploadedImages as $uploadedImage) {
                            $imageName = Str::lmiit($uploadedImage,8) . '.' . $uploadedImage->getClientOriginalExtension();
                            $uploadedImage->storeAs('public', $imageName);
                            $existingImages[] = $imageName;
                        }
                    }
            
                    $image->{$column} = implode('|', $existingImages);
                }
            
                $image->save();

                $unit->status()->sync($request->input('status_id'));

                return redirect('/admin/unit/show/' . $id);
            } catch (Exception $e) {
                return $e;
            }

        }

    public function destroy(string $id)
    {
        
            $unit = Unit::findOrfail($id);

            $unit->delete();
            $unit->status()->detach();
            $unit->specifications()->delete();
            $unit->images()->delete();

            return redirect('/admin/unit/data')->with('success', 'Data Deleted');
        
    }
}
