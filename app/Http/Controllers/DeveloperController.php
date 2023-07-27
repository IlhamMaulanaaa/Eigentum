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
        try{
            $request->validate([
                'company'   => 'required',
                'email' => 'required|email|unique:developers',
                'password'  => 'required|min:8',
                'license.*' => 'required|file|max:10240',
                'telp'  => 'required',
                'name' => 'required',
                'owner_email' => 'required|email|unique:owners',
                'owner_password' => 'required|min:8',
                'ktp' => 'required|file|max:10240',
                'face' => 'required|file|max:10240',
                'address'   => 'required',
            ]);

            $images = ['ktp', 'face']; 
            $imageNames = [];

            foreach ($images as $image) {
                $imageField = $request->file($image);

                if ($imageField) {
                    $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
                    $imageNames[] = $imageName;
                    $imageField->storeAs('public', $imageName);
                }
            }
            

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
                'owner_email' => $request->owner_email,
                'owner_password' => bcrypt($request->owner_password),
                'ktp' => $imageNames[0],
                'face' => $imageNames[1],
                'developer_id' => $developer->id,
            ]); 

            $developer->provinces()->attach($request->provinces_id);
            $developer->regencies()->attach($request->regencies_id);
            $developer->districts()->attach($request->districts_id);
            $developer->villages()->attach($request->villages_id);

            $developer = Developer::where('id', '=', $developer->id)->get();
            
            return redirect('/admin/developer/developer',);
        }catch(Exception $e){
            return $e;
        }
        
        
    }

    public function show(Developer $developer, Owner $owner)
    {
        $licenseFile = explode("|", $developer->license); 
        $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        return view('admin.developer.detail', compact('developer', 'licenseFile',  'fileNames' , ));
    }
    
    public function edit(Developer $developer)
    {
        $licenses = is_string($developer->license) ? explode('|', $developer->license) : []; 
        $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        $provinces = Province::all();
        return view('admin.developer.edit', compact('developer', 'licenses', 'fileNames', 'provinces'));
    }

    public function update(Request $request,string $id)
    {
        try{
            $request->validate([
                'company'   => 'nullable',
                'email' => 'nullable|email',
                'password'  => 'nullable|min:8',
                'license.*' => 'nullable|file|max:10240',
                'telp'  => 'nullable',
                'name' => 'nullable',
                'owner_email' => 'nullable|email',
                'owner_password' => 'nullable|min:8',
                'ktp' => 'nullable|file|max:10240',
                'face' => 'nullable|file|max:10240',
                'address'   => 'nullable',
            ]);

            $developer= Developer::findOrfail($id);

            $developer->update([
                'company'   => $request->company,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'telp'  => $request->telp,
            ]);

            $owner = Owner::findOrfail($id);

            $owner->update([
                'name' => $request->name,
                'owner_email' => $request->owner_email,
                'owner_password' => bcrypt($request->owner_password),
                'developer_id' => $developer->id,
            ]); 

            $images = ['ktp', 'face'];

            foreach ($images as $image) {
                if ($request->hasFile($image)) {
                    // Hapus gambar lama jika sudah ada
                    if ($owner->$image) {
                        Storage::delete('public/' . $owner->$image);
                    }

                    // Simpan gambar baru
                    $imageField = $request->file($image);
                    $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
                    $imageField->storeAs('public', $imageName);
                    $owner->$image = $imageName;
                }
            }

            if ($request->hasFile('license')) {
                $licenses = $request->file('license');
                foreach ($licenses as $index => $license) {
                    if ($license->isValid()) {
                        $licenseName = $license->getClientOriginalName() . '.' . $license->getClientOriginalExtension();
                        $license->storeAs('public', $licenseName);
                        $fileArray = explode('|', $developer->license);
                        $fileArray[$index] = $licenseName;
                        $developer->license = implode('|', $fileArray);
                    }
                }
            }

            $owner->save();
            $developer->save();
            // $developer->provinces()->sync($request->input('province_id'));
            // $developer->regencies()->sync($request->input('regency_id'));
            // $developer->districts()->sync($request->input('district_id'));
            // $developer->villages()->sync($request->input('village_id'));

            $developer = Developer::where('id', '=', $developer->id)->get();
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
            $developer->owners()->delete();
            $developer->properties()->delete();
            $developer->units()->delete();
            $developer->provinces()->detach();
            $developer->regencies()->detach();
            $developer->districts()->detach();
            $developer->villages()->detach();
            $developer = $developer->delete();

            return  redirect('/admin/developer/data',);

        }catch(Exception $e){
            return $e;
        }
        
    }

}
