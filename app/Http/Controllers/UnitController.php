<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Type;
use App\Models\Unit;
use App\Models\Image;
use App\Models\Status;
use App\Models\Regency;
use App\Models\Property;
use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Specification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;



class UnitController extends Controller
{
    public function filter(Request $request)
    {
        // Proses filter dan ambil hasil sesuai parameter
        $filteredUnits = Unit::filter($request->all())->paginate(5);
        $units = Unit::all();
        $property = Property::all();
        $types = Type::all();
        $statuses = Status::all();
        $specification = Specification::all();
        $pivotTable = (new Property())->regencies()->getTable();

        $regencies = Regency::whereIn('id', function ($query) use ($pivotTable) {
            $query->select('regency_id')
                ->from($pivotTable);
        })->pluck('name', 'id');

        if ($request->wantsJson()) {
            return response()->json($filteredUnits);
        }

        if (!Auth::check()) {
            return view('pages.page.viewunit', compact('statuses', 'specification', 'types', 'property', 'units', 'filteredUnits', 'regencies'));
        } elseif (Auth::user()->role == "admin") {
            return view('admin.searchfilter', compact('statuses', 'specification', 'types', 'property', 'units', 'filteredUnits', 'regencies'));
        } else {
            return view('pages.page.viewunit', compact('statuses', 'specification', 'types', 'property', 'units', 'filteredUnits', 'regencies'));
        }
        // return view('admin.searchfilter', compact('statuses', 'specification', 'types', 'property', 'units', 'filteredUnits', 'regencies'));
    }


    public function index(Request $request)
    {
        $units = Unit::filter($request->all())->paginate(10);
        $properties = Property::all()->pluck('title', 'id');;
        $statuses = Status::all();
        $tables = (new Unit())->getTable();
        $types = Type::all();

        $pivotTable = (new Property())->regencies()->getTable();

        $regencies = Regency::whereIn('id', function ($query) use ($pivotTable) {
            $query->select('regency_id')
                ->from($pivotTable);
        })->pluck('name', 'id');

        $specifications = Specification::all();

        if ($units) {
            return view('admin.unit.all', compact('types', "units", "tables", "properties", "statuses", 'regencies', 'specifications'));
        }
    }

    public function create(Request $request, $propertyId)
    {
        $property = Property::findOrfail($propertyId);
        $status = Status::all();

        if (Auth::user()->role == "admin") {
            return view('admin.unit.create', compact('property', 'status'));
        } else {
            return view('pages.unit.create', compact('property', 'status'));
        }
    }

    public function homeunit(Request $request)
    {
        $units = Unit::filter($request->all())->get();
        $newunits = Unit::orderBy('created_at', 'desc')->get();
        $property = Property::all();
        $status = Status::all();
        $tables = (new Unit())->getTable();
        $types = Type::all();
        $developer = Developer::all();

        $pivotTable = (new Property())->regencies()->getTable();

        $regencies = Regency::whereIn('id', function ($query) use ($pivotTable) {
            $query->select('regency_id')
                ->from($pivotTable);
        })->pluck('name', 'id', 'regency_id');

        if ($units) {
            return view('pages.page.home', compact('units', 'newunits', 'developer', 'property', 'status', 'types', 'regencies'));
            // return view('pages.page.home', compact('units', 'newunits', 'developer', 'property', 'status', 'types', 'regencies'));
        }
    }

    public function store(Request $request,  $propertyId)
    {
        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'price' => 'required|max:7',
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
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
                'status_id' => 'required',
            ], [
                'title.required' => 'Nama unit tidak boleh kosong',
                'description.required' => 'Deskripsi tidak boleh kosong',
                'price.required' => 'Harga tidak boleh kosong',
                'price.numbers' => 'Harga harus berupa angka',
                'price.max' => 'Harga harus 7 digit',
                'image.required' => 'Gambar tidak boleh kosong',
                'image.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
                'image.max' => 'Ukuran gambar maksimal 10MB',
                'bedroom.required' => 'Jumlah kamar tidur tidak boleh kosong',
                'bathroom.required' => 'Jumlah kamar mandi tidak boleh kosong',
                'surface_area.required' => 'Luas tanah tidak boleh kosong',
                'building_area.required' => 'Luas bangunan tidak boleh kosong',
                'floor.required' => 'Lantai tidak boleh kosong',
                'livingroomimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
                'livingroomimg.*.max' => 'Ukuran gambar maksimal 10MB',
                'bedroomimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
                'bedroomimg.*.max' => 'Ukuran gambar maksimal 10MB',
                'bathroomimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
                'bathroomimg.*.max' => 'Ukuran gambar maksimal 10MB',
                'kitchenimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
                'kitchenimg.*.max' => 'Ukuran gambar maksimal 10MB',
                'etcimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
                'etcimg.*.max' => 'Ukuran gambar maksimal 10MB',
                'status_id.required' => 'Status tidak boleh kosong',
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
                        $imageFileName = $fieldName->getClientOriginalName() . "." . $fieldName->getClientOriginalExtension();
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

            $unit->statuses()->attach($request->input('status_id'));

            // return redirect(route('unit.index'))->with('success', 'Data Created');

            if (Auth::user()->role == "admin") {
                return redirect(route('property.index'));
            } else {
                return redirect(route('property.show.developer', $propertyId));
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(Unit $unit, Request $request)
    {
        $developer = Developer::first();
        $data = $request->all();
        $images = Image::where('unit_id', $unit->id)->first();
        $propertyPrice = $unit->price; // Harga utama atau harga jual properti
        $monthsInYear = 24; // Jumlah bulan dalam satu tahun
        $property = Property::where('id', '=', $unit->property_id)->get();
        // Hitung harga per bulan
        $pricePerMonth = $propertyPrice / $monthsInYear;
        $units = Unit::all();
        // echo "Harga per bulan: $" . number_format($pricePerMonth, 2);
        if (!Auth::check()) {
            return view('pages.unit.detail', compact('unit', 'images', 'pricePerMonth', 'units'));
        } elseif (Auth::user()->role == "admin") {
            return view('admin.unit.detail', compact('unit', 'images', 'pricePerMonth', 'units'));
        } elseif (Auth::user()->role == "developer") {
            return view('pages.unit.detail', compact('unit', 'images', 'pricePerMonth', 'developer', 'units'));
        } elseif (Auth::user()->role == "agent") {
            return view('pages.unit.detail', compact('unit', 'images', 'pricePerMonth', 'units'));
        }
    }


    public function edit(Unit $unit)
    {
        $properties = Property::all();
        $statuses = Status::all();

        if (Auth::user()->role == "admin") {
            return view('admin.unit.edit', compact('unit', 'statuses', 'properties'));
        } elseif (Auth::user()->role == "developer") {
            return view('pages.unit.edit', compact('unit', 'statuses', 'properties'));
        } else {
            return view('admin.unit.edit', compact('unit', 'statuses', 'properties'));
        }
    }


    public function update(Request $request, string $id)
    {
        // try {
        $data = $request->all();

        $unit = Unit::findOrfail($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
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
        ], [
            'title.required' => 'Nama unit tidak boleh kosong',
            'description.required' => 'Deskripsi tidak boleh kosong',
            'price.required' => 'Harga tidak boleh kosong',
            'bedroom.required' => 'Jumlah kamar tidur tidak boleh kosong',
            'bathroom.required' => 'Jumlah kamar mandi tidak boleh kosong',
            'surface_area.required' => 'Luas tanah tidak boleh kosong',
            'building_area.required' => 'Luas bangunan tidak boleh kosong',
            'floor.required' => 'Lantai tidak boleh kosong',
            'livingroomimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
            'livingroomimg.*.max' => 'Ukuran gambar maksimal 10MB',
            'bedroomimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
            'bedroomimg.*.max' => 'Ukuran gambar maksimal 10MB',
            'bathroomimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
            'bathroomimg.*.max' => 'Ukuran gambar maksimal 10MB',
            'kitchenimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
            'kitchenimg.*.max' => 'Ukuran gambar maksimal 10MB',
            'etcimg.*.image' => 'Gambar harus berupa file jpg, png, jpeg, gif, atau svg',
            'etcimg.*.max' => 'Ukuran gambar maksimal 10MB',
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
            'statuscode' => $request->statuscode,
        ]);

        $unit->save();

        $specification = Specification::findOrfail($id);

        $specification->update([
            'bedroom' => $request->bedroom,
            'bathroom' => $request->bathroom,
            'surface_area' => $request->surface_area,
            'building_area' => $request->building_area,
            'floor' => $request->floor,
            'unit_id' => $unit->id,
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
                    $imageName = Str::limit($uploadedImage->getClientOriginalName(), 8) . '.' . $uploadedImage->getClientOriginalExtension();
                    $uploadedImage->storeAs('public', $imageName);
                    $existingImages[$index] = $imageName;
                }
            }

            // Menambahkan gambar baru jika ada
            if ($request->hasFile($column . '_insert')) {
                $uploadedImages = $request->file($column . '_insert');
                $newImages = [];

                foreach ($uploadedImages as $uploadedImage) {
                    $imageName = Str::limit($uploadedImage->getClientOriginalName(), 8) . '.' . $uploadedImage->getClientOriginalExtension();
                    $uploadedImage->storeAs('public', $imageName);
                    $existingImages[] = $imageName;
                }
            }

            $image->{$column} = implode('|', $existingImages);
        }

        $image->save();

        $unit->statuses()->sync($request->input('status_id'));

        // $property = Property::where('id', '=', $properties->id)->get();
        // return redirect(route('unit.show', $id));
        if (Auth::user()->role == "admin") {
            return redirect(route('unit.show', $id));
        } elseif (Auth::user()->role == "developer") {
            return redirect(route('property.show.developer', $unit->property_id));
        }
        // } catch (Exception $e) {
        //     return $e;
        // }
    }

    public function destroy(string $id)
    {
        $unit = Unit::findOrfail($id);

        $unit->delete();
        $unit->statuses()->detach();
        $unit->specifications()->delete();
        $unit->images()->delete();

        if (Auth::user()->role == "admin") {
            return redirect(route('unit.index'))->with('success', 'Data Deleted');
        } else {
            return redirect()->back();
        }
    }
}
