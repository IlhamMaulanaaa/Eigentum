<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Developer;
use App\Models\Owner;
use App\Models\Province;
use Exception;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DeveloperController extends Controller
{


    public function index()
    {
        $developers = Developer::all();
        $tables = (new Developer())->getTable();

        

        return view('admin.developer.all', compact('developers', 'tables', ));
    }

    public function create()
    {
        $provinces = Province::all();

        return view('admin.developer.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'   => 'required',
                'company'   => 'required',
                'email' => 'required|email|unique:developers',
                'password'  => 'required|min:8',
                'address'  => 'required',
                'license.*' => 'required|file|max:10240',
                'telp'  => 'required',
                'ktp' => 'required|file|max:10240',
                'face' => 'required|file|max:10240',
            ]);

            $files = $request->file('license');
            $fileArray = [];
            
                foreach ($files as $index => $file) {
                    $license =  $file->getClientOriginalName() . "." . $file->getClientOriginalExtension();
                    $fileArray[] = $license;
                    Storage::disk('public')->put($license, file_get_contents($file));
                }
            
            $developer = Developer::create([
                'company'   => $request->company,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'license'   => implode("|", $fileArray),
                'telp'  => $request->telp,
            ]);

            $owner = Owner::create([
                'name' => $request->name,
                'owner_email' => $request->email,
                'owner_password' => bcrypt($request->password),
                'ktp' => $request->ktp,
                'face' => $request->face,
                'developer_id' => $developer->id,
            ]); 
            

            $developer = Developer::where('id', '=', $developer->id)->get();
            
            return redirect('/admin/developer/data',);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(Developer $developer)
    {
        $licenseFile = explode("|", $developer->license);  
        $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        return view('admin.developer.detail', compact('developer', 'licenseFile', 'fileNames' ));
    }
    
    public function edit(Developer $developer)
    {
        $licenses = is_string($developer->license) ? explode('|', $developer->license) : []; 
        $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        return view('admin.developer.edit', compact('developer', 'licenses', 'fileNames'));
    }

    public function update(Request $request,string $id)
    {
        try{
            $request->validate([
                'company'   => 'nullable',
                'email' => 'nullable|email',
                'password'  => 'nullable|min:8',
                'owner' => 'nullable',
                'address'  => 'nullable',
                'license.*' => 'nullable|file|max:10240',
                'telp'  => 'nullable',
            ]);

            $data= Developer::findOrfail($id);

            $data->update([
                'company'   => $request->company,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'owner' => $request->owner,
                'address'   => $request->address,
                'telp'  => $request->telp
            ]);

            if ($request->hasFile('license')) {
                $licenses = $request->file('license');
                foreach ($licenses as $index => $license) {
                    if ($license->isValid()) {
                        $licenseName = $license->getClientOriginalName() . '.' . $license->getClientOriginalExtension();
                        $license->storeAs('public', $licenseName);
                        $fileArray = explode('|', $data->license);
            
                        // Update the specific index in the array
                        $fileArray[$index] = $licenseName;
            
                        // Rebuild the array and assign it back to the column
                        $data->license = implode('|', $fileArray);
                    }
                }
            }

            $data->save();

            $data = Developer::where('id', '=', $data->id)->get();
            $url = '/admin/developer/show/' . $id;
            return redirect($url);


        }catch(Exception $e){
            return $e;
        }
    }



    public function destroy(string $id)
    {
        try{
            $developer = Developer::findOrfail($id);
            $developer->properties()->delete();
            $developer->units()->delete();
            $data = $developer->delete();

            return  redirect('/admin/developer/data',);

        }catch(Exception $e){
            return $e;
        }
        
    }

}
