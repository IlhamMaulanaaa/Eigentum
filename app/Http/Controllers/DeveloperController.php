<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Owner;
use App\Models\Province;
use App\Models\Developer;
use Illuminate\Support\Str;
use App\Helper\ApiFormatter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class DeveloperController extends Controller
{

    public function SigninDeveloper()
    {
        return view('auth.developer.signin');
    }
    public function SignupDeveloper()
    {
        $provinces = Province::all();

        return view('auth.developer.signup', compact('provinces'));
    }

    public function index()
    {
        $developers = Developer::all();
        $tables = (new Developer())->getTable();

        return view('admin.developer.all', compact('developers', 'tables',));
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

            return redirect('/admin/developer/data',);
        } catch (Exception $e) {
            return $e;
        }
    }
    public function storeFront(Request $request)
    {
        try {
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

            return redirect('/developer/dashboard',);
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show(Developer $developer, Owner $owner)
    {
        $licenseFile = explode("|", $developer->license);
        $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        return view('admin.developer.detail', compact('developer', 'licenseFile',  'fileNames',));
    }

    public function edit(Developer $developer)
    {
        $licenses = is_string($developer->license) ? explode('|', $developer->license) : [];
        $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        $provinces = Province::all();
        return view('admin.developer.edit', compact('developer', 'licenses', 'fileNames', 'provinces'));
    }

    public function update(Request $request, string $id)
    {
        try {
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
            ]);

            $data = Developer::findOrfail($id);

            $data->update([
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
                'developer_id' => $data->id,
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
                        $fileArray = explode('|', $data->license);
                        $fileArray[$index] = $licenseName;
                        $data->license = implode('|', $fileArray);
                    }
                }
            }

            $owner->save();
            $data->save();
            // $data->provinces()->sync($request->input('province_id'));
            // $data->regencies()->sync($request->input('regency_id'));
            // $data->districts()->sync($request->input('district_id'));
            // $data->villages()->sync($request->input('village_id'));

            $data = Developer::where('id', '=', $data->id)->get();
            $url = '/admin/developer/show/' . $id;
            return redirect($url);
        } catch (Exception $e) {
            return $e;
        }
    }



    public function destroy(string $id)
    {
        try {
            $developer = Developer::findOrfail($id);
            $developer->owners()->delete();
            $developer->properties()->delete();
            $developer->units()->delete();
            $developer->provinces()->detach();
            $developer->regencies()->detach();
            $developer->districts()->detach();
            $developer->villages()->detach();
            $data = $developer->delete();

            return  redirect('/admin/developer/data',);
        } catch (Exception $e) {
            return $e;
        }
    }
    public function postSigninDeveloper(Request $request)
{
    Session::flash('emaild', $request->email);
    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
    ], [
        'email.required' => 'Email wajib diisi',
        'password.required' => 'Password wajib diisi'
    ]);

    $infologin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::guard('developer')->attempt($infologin)) {
        return redirect('/beranda');
    } else {
        return redirect('/')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
    }
}
}
