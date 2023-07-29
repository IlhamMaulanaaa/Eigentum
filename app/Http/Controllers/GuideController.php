<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Guide;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GuideController extends Controller
{

    public function index()
    {
        $data = Guide::all();
        $tables = (new Guide())->getTable();

        if($data) {
            return view('admin.guide.all' , ['guides' => $data, 'tables' => $tables]);
        }else{
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }


    public function create()
    {
        return view('admin.guide.create', ['guide']);
    }


    public function store(Request $request)
    {
        
            $request->validate([
                'title'  => 'required',
                'description'   => 'required',
                'image'   => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            ]);

            $image = Str::random(8). "." . $request->image->getClientOriginalExtension();

            $data = Guide::create([
                'title'  => $request->title,
                'description'   => $request->description,
                'image'   => $image,
            ]);

            Storage::disk('public')->put($image, file_get_contents($request->image));

            $data = Guide::where('id', '=', $data->id)->get();

            if($data){
                return redirect(route('guide.index'));
            }
    }


    public function show(Guide $guide)
    {
        return view('admin.guide.detail', [
            "guide" => $guide
        ]);
    }

    public function edit(Guide $guide)
    {
        return view('admin.guide.edit', [
            "guide" => $guide
        ]);
    }


    public function update(Request $request, string $id)
    {
        
        $request->validate([
            'title'  => 'required',
            'description'   => 'required',
            'image'   => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
        ]);

        $data = Guide::findOrfail($id);

        $data->update([
            'title'  => $request->title,
            'description'   => $request->description,
        ]);

        $images = ['image'];
        foreach ($images as $key => $image) {
            if ($request->hasFile($image)) {
                $imageName = $request->{$image}->getClientOriginalName(). "." . $request->{$image}->getClientOriginalExtension();
                $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->{$image}));
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $data->{$image} = $imageName;
            }}
            
        $data->save();

            $data = Guide::where('id', '=', $data->id)->get();
            

            return redirect(route('guide.show', $id));
        
    }


    public function destroy(string $id)
    {
        
            $guide = Guide::findOrfail($id);
            $data = $guide->delete();

            if ($data) {
                return redirect(route('guide.index'));
            } 
        
    }
}
