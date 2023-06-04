<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Developer;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Developer::all();
        $tables = (new Developer())->getTable();

        if ($data) {
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.developer.all', ['developers' => $data, 'tables' => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.developer.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'company'   => 'required',
                'email' => 'required|email|unique:developers',
                'password'  => 'required|min:8',
                'owner' => 'required',
                'address'  => 'required',
                'license'   => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'phone_number'  => 'required',
            ]);

            $license = Str::random(8). "." . $request->license->getClientOriginalExtension();

            $data = Developer::create([
                'company'   => $request->company,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'owner' => $request->owner,
                'address'   => $request->address,
                'license'   => $license,
                'phone_number'  => $request->phone_number,
            ]);
            
            Storage::disk('public')->put($license, file_get_contents($request->license));

            $data = Developer::where('id', '=', $data->id)->get();

            
                return redirect('/admin/developer/data',);
            
        } catch (Exception $e) {
            return $e;
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        return view('admin.developer.detail', [
            'developer' => $developer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        return view('admin.developer.edit', [
            'developer' => $developer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request,string $id)
    {
        try {
            $request->validate([
                'company'   => 'nullable',
                'email' => 'nullable|email',
                'password'  => 'nullable|min:8',
                'owner' => 'nullable',
                'address'  => 'nullable',
                'license'   =>  'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'phone_number'  => 'nullable',
            ]);

            $data= Developer::findOrfail($id);

            $data->update([
                'company'   => $request->company,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'owner' => $request->owner,
                'address'   => $request->address,
                'phone_number'  => $request->phone_number
            ]);

            if ($request->hasFile('license')) {
                $imageName = $request->license->getClientOriginalName(). "." . $request->license->getClientOriginalExtension();
                $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->license));
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $data->license = $imageName;
            }

            $data->save();

            $data = Developer::where('id', '=', $data->id)->get();
            $url = '/admin/developer/show/' . $id;

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
        try {
            $developer = Developer::findOrfail($id);
            $data = $developer->delete();

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Deleted', null). redirect('/admin/developer/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return $e;
        }
    }
}
