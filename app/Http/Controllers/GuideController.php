<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Guide;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class GuideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.guide.create', ['guide']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'title'  => 'required',
                'description'   => 'required',
                'image'   => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            ]);

            $image = $request->image->getClientOriginalName(). "." . $request->image->getClientOriginalExtension();

            $data = Guide::create([
                'title'  => $request->title,
                'description'   => $request->description,
                'image'   => $image,
            ]);

            Storage::disk('public')->put($image, file_get_contents($request->image));

            $data = Guide::where('id', '=', $data->id)->get();

            if($data){
                return ApiFormatter::createApi('201', 'Created', $data).redirect('/admin/guide/data',);
            }else{
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        }catch(Exception $e){
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Guide $guide)
    {
        return view('admin.guide.detail', [
            "guide" => $guide
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guide $guide)
    {
        return view('admin.guide.edit', [
            "guide" => $guide
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
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

        // if ($request->hasFile('image')) {
        //     $image = $request->image->getClientOriginalName(). "." . $request->image->getClientOriginalExtension();
        //     $image_path = Storage::disk('public')->put($image, file_get_contents($request->{$image}));
        //                 if (File::exists($image_path)) {
        //                     File::delete($image_path);
        //                 }
        //     $data->image = $image;
        // }

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
            $url = '/admin/guide/show/' . $id;

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
            $guide = Guide::findOrfail($id);
            $data = $guide->delete();

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Deleted', null) . redirect('/admin/guide/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }
}
