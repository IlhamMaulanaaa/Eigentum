<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Type;
use App\Models\Unit;
use App\Models\User;
use App\Models\Owner;
use App\Models\Status;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Property;
use App\Models\Province;
use App\Models\Developer;
use Illuminate\Support\Str;
use App\Helper\ApiFormatter;
use Illuminate\Http\Request;
use App\Models\Specification;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;


class DeveloperController extends Controller
{

    public function history(Request $request)
    {
        $user = auth()->user();
    
        // Ambil semua properti yang dimiliki oleh developer yang saat ini masuk
        $developerProperties = $user->developers->first()->properties;
    
        // Ambil semua unit yang terjual yang terkait dengan properti-properti developer
        $filteredUnits = Unit::whereIn('property_id', $developerProperties->pluck('id'))
            ->where('statuscode', 'terjual')
            ->paginate(10);
    
        $units = Unit::all();
        $property = Property::all();
        $types = Type::all();
        $statuses = Status::all();
        $specification = Specification::all();
        $pivotTable = (new Property())->regencies()->getTable();
    
        return view('pages.developer.history', compact('statuses', 'specification', 'types', 'property', 'units', 'filteredUnits', 'developerProperties'));
    }
    

    public function approval()
    {
        $developer = Developer::all();

        return view('admin.developer.approval', compact('developer'));
    }

    public function showFront()
    {
        $user =  auth()->user();
        $developer = $user->developers->first();
        $licenseFile = is_string($developer->license) ? explode('|', $developer->license) : [];
        // return view('pages.page.profile', compact('developer', 'user', 'licenseFile',));
        return view('pages.developer.profile', compact('developer', 'user', 'licenseFile',));
    }

    public function dashboard() //menampilkan dashboard developer
    {
        $user =  auth()->user();
        $developer = $user->developers->first();
        $licenseFile = explode("|", $developer->license);
        return view('pages.developer.dashboard', compact('developer', 'user', 'licenseFile'));
    }

    public function SigninDeveloper()
    {
        return view('auth.signin');
    }

    public function SignupDeveloper()
    {
        $provinces = Province::all();

        return view('auth.developer.signup', compact('provinces'));
    }

    public function approve($id)
    {
        $developer = Developer::findOrFail($id);
        return view('admin.developer.approve', compact('developer'));
    }

    public function updateSub($id)
    {
        $data = Developer::find($id);

        $data->subscribe = 'already';
        $data->save();

        return redirect()->route('developer.dashboard');
    }
    public function updateApproved($id)
    {
        $data = Developer::find($id);

        $data->status = 'approved';
        $data->save();

        return redirect('admin/developer');
    }
    public function updateRejected($id)
    {
        $data = Developer::find($id);

        $data->status = 'rejected';
        $data->save();

        return redirect('admin/developer');
    }


    public function index()
    {
        $developers = Developer::filter(request(['search', 'regency_id']))->paginate(5);
        $tables = (new Developer())->getTable();
        // Mendapatkan nama tabel pivot antara developers dan regencies
        $pivotTable = (new Developer())->regencies()->getTable();

        // Mendapatkan regencies yang terhubung deng  an developer melalui tabel pivot
        $regencies = Regency::whereIn('id', function ($query) use ($pivotTable) {
            $query->select('regency_id')
                ->from($pivotTable);
        })->pluck('name', 'id');
        return view('admin.developer.all', compact('developers', 'tables', 'regencies'));
    }

    public function create()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('admin.developer.create', compact('provinces', 'regencies', 'districts', 'villages'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'company'   => 'required',
                'email' => 'required|email',
                'password'  => [
                    'required',
                    'string',
                ],
                'address'   => 'required',
                'license.*' => 'required|file|max:10240',
                'telp' => 'required|regex:/^[0-9+\-() ]+$/',
                'name' => 'required',
                'company_email' => 'required|email',
                'company_password' => [
                    'required',
                    'string',
                ],
                'ktp' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            ], [
                'company.required' => 'Nama Perusahaan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email harus mengandung @',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'password.numbers' => 'Password harus mengandung angka',
                'password.symbols' => 'Password harus mengandung simbol',
                'address.required' => 'Alamat tidak boleh kosong',
                'license.*.required' => 'Lisensi tidak boleh kosong',
                'license.*.file' => 'Lisensi harus berupa file',
                'license.*.max' => 'Ukuran lisensi maksimal 10MB',
                'telp.required' => 'Nomor telepon tidak boleh kosong',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
                'name.required' => 'Nama tidak boleh kosong',
                'company_email.required' => 'Email tidak boleh kosong',
                'company_email.email' => 'Email harus mengandung @',
                'company_email.unique' => 'Email sudah terdaftar',
                'company_password.required' => 'Password tidak boleh kosong',
                'company_password.min' => 'Password minimal 8 karakter',
                'company_password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'company_password.numbers' => 'Password harus mengandung angka',
                'company_password.symbols' => 'Password harus mengandung simbol',
                'ktp.required' => 'KTP tidak boleh kosong',
                'ktp.file' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.required' => 'Foto tidak boleh kosong',
                'face.file' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran foto maksimal 10MB',
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
                'company_email' => $request->company_email,
                'company_password'  => bcrypt($request->company_password),
                'address'   => $request->address,
                'license'   => implode("|", $fileArray),
                'telp'  => $request->telp,
                'ktp' => $imageNames[0],
                'face' => $imageNames[1],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'developer',
            ]);
            // dd($developer);
            $user->developers()->attach($developer->id);

            $developer->provinces()->attach($request->provinces_id);
            $developer->regencies()->attach($request->regencies_id);
            $developer->districts()->attach($request->districts_id);
            $developer->villages()->attach($request->villages_id);

            $developer = Developer::where('id', '=', $developer->id)->get();

            return redirect(route('developer.index'));
        } catch (Exception $e) {
            return $e;
        }
    }

    public function storeFront(Request $request)
    {
        try {
            $request->validate([
                'company'   => 'required',
                'email' => 'required|email',
                'password'  => [
                    'required',
                    'string',
                ],
                'address'   => 'required',
                'license.*' => 'required|file|max:10240',
                'telp' => 'required|regex:/^[0-9+\-() ]+$/',
                'name' => 'required',
                'company_email' => 'required|email',
                'company_password' => [
                    'required',
                    'string',
                ],
                'ktp' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            ], [
                'company.required' => 'Nama Perusahaan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email harus mengandung @',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'password.numbers' => 'Password harus mengandung angka',
                'password.symbols' => 'Password harus mengandung simbol',
                'address.required' => 'Alamat tidak boleh kosong',
                'license.*.required' => 'Lisensi tidak boleh kosong',
                'license.*.file' => 'Lisensi harus berupa file',
                'license.*.max' => 'Ukuran lisensi maksimal 10MB',
                'telp.required' => 'Nomor telepon tidak boleh kosong',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
                'name.required' => 'Nama tidak boleh kosong',
                'company_email.required' => 'Email tidak boleh kosong',
                'company_email.email' => 'Email harus mengandung @',
                'company_email.unique' => 'Email sudah terdaftar',
                'company_password.required' => 'Password tidak boleh kosong',
                'company_password.min' => 'Password minimal 8 karakter',
                'company_password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'company_password.numbers' => 'Password harus mengandung angka',
                'company_password.symbols' => 'Password harus mengandung simbol',
                'ktp.required' => 'KTP tidak boleh kosong',
                'ktp.file' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.required' => 'Foto tidak boleh kosong',
                'face.file' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran foto maksimal 10MB',
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
                'company_email' => $request->company_email,
                'company_password'  => bcrypt($request->company_password),
                'address'   => $request->address,
                'license'   => implode("|", $fileArray),
                'telp'  => $request->telp,
                'ktp' => $imageNames[0],
                'face' => $imageNames[1],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'developer',
            ]);

            $developer->users()->attach($user->id);

            $developer->provinces()->attach($request->provinces_id);
            $developer->regencies()->attach($request->regencies_id);
            $developer->districts()->attach($request->districts_id);
            $developer->villages()->attach($request->villages_id);

            $developer = Developer::where('id', '=', $developer->id)->get();
            Auth::login($user);
            return redirect('/');
        } catch (Exception $e) {
            return $e;
        }
    }

    public function show($id)
    {
        $developer = Developer::findOrFail($id);
        $user = User::findOrFail($id);
        $licenseFile = explode("|", $developer->license);
        return view('admin.developer.detail', compact('developer', 'licenseFile', 'user'));
    }


    public function edit(Developer $developer)
    {
        $licenseFile = is_string($developer->license) ? explode('|', $developer->license) : [];
        // $fileNames = ['Nomor Induk Berusaha (NIB)', 'Nomor Pokok Wajib Pajak (Npwp)', 'Sertifikat Badan Usaha (SBU)'];
        $provinces = Province::all();

        return view('admin.developer.edit', compact('developer', 'licenseFile', 'provinces'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'company'   => 'nullable',
                'company_email' => 'nullable|email',
                'company_password' => [
                    'nullable',
                    'string',
                ],
                'address'   => 'nullable',
                'license.*' => 'nullable|file|max:10240',
                'telp' => 'nullable|regex:/^[0-9+\-() ]+$/',
                'ktp' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'name' => 'nullable',
                'email' => 'nullable|email',
            ], [
                'company.required' => 'Nama Perusahaan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email harus mengandung @',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'password.numbers' => 'Password harus mengandung angka',
                'password.symbols' => 'Password harus mengandung simbol',
                'address.required' => 'Alamat tidak boleh kosong',
                'license.*.required' => 'Lisensi tidak boleh kosong',
                'license.*.file' => 'Lisensi harus berupa file',
                'license.*.max' => 'Ukuran lisensi maksimal 10MB',
                'telp.required' => 'Nomor telepon tidak boleh kosong',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
                'name.required' => 'Nama tidak boleh kosong',
                'company_email.required' => 'Email tidak boleh kosong',
                'company_email.email' => 'Email harus mengandung @',
                'company_email.unique' => 'Email sudah terdaftar',
                'company_password.required' => 'Password tidak boleh kosong',
                'company_password.min' => 'Password minimal 8 karakter',
                'company_password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'company_password.numbers' => 'Password harus mengandung angka',
                'company_password.symbols' => 'Password harus mengandung simbol',
                'ktp.required' => 'KTP tidak boleh kosong',
                'ktp.file' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.required' => 'Foto tidak boleh kosong',
                'face.file' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran foto maksimal 10MB',
            ]);

            $developer = Developer::findOrfail($id);
            // $users = User::findOrfail($id);
            $users = $developer->users->first(); // Mengambil developer pertama terkait dengan pengguna

            if ($developer) {

                $users->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                $developer->update([
                    'company'   => $request->company,
                    'company_email' => $request->company_email,
                    'company_password' => bcrypt($request->company_password),
                    'address'   => $request->address,
                    'telp'  => $request->telp,
                ]);

                $images = ['ktp', 'face'];

                foreach ($images as $image) {
                    if ($request->hasFile($image)) {
                        // Hapus gambar lama jika sudah ada
                        if ($developer->$image) {
                            Storage::delete('public/' . $developer->$image);
                        }

                        // Simpan gambar baru
                        $imageField = $request->file($image);
                        $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
                        $imageField->storeAs('public', $imageName);
                        $developer->$image = $imageName;
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

                $users->developers()->sync($developer);
                $users->save();
                $developer->save();
            }
            // $developer->users()->sync($users->id);
            $developer->provinces()->sync($request->input('province_id'));
            $developer->regencies()->sync($request->input('regency_id'));
            $developer->districts()->sync($request->input('district_id'));
            $developer->villages()->sync($request->input('village_id'));
            $developer->save();

            // $developer = Developer::where('id', '=', $developer->id)->get();
            return redirect(route('developer.show', $id));
            // return redirect(route('developer.profile'));
            // if (Auth::user()->role == "admin"){
            //     return redirect(route('developer.show', $id));
            // }else{
            //     // dd($users);
            // }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function updateFront(Request $request, string $id)
    {
        try {
            $request->validate([
                'company'   => 'nullable',
                'company_email' => 'nullable|email',
                'company_password' => [
                    'nullable',
                    'string',
                ],
                'address'   => 'nullable',
                'license.*' => 'nullable|file|max:10240',
                'telp' => 'nullable|regex:/^[0-9+\-() ]+$/',
                'ktp' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'name' => 'nullable',
                'email' => 'nullable|email',
            ], [
                'company.required' => 'Nama Perusahaan tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
                'email.email' => 'Email harus mengandung @',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'password.numbers' => 'Password harus mengandung angka',
                'password.symbols' => 'Password harus mengandung simbol',
                'address.required' => 'Alamat tidak boleh kosong',
                'license.*.required' => 'Lisensi tidak boleh kosong',
                'license.*.file' => 'Lisensi harus berupa file',
                'license.*.max' => 'Ukuran lisensi maksimal 10MB',
                'telp.required' => 'Nomor telepon tidak boleh kosong',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
                'name.required' => 'Nama tidak boleh kosong',
                'company_email.required' => 'Email tidak boleh kosong',
                'company_email.email' => 'Email harus mengandung @',
                'company_email.unique' => 'Email sudah terdaftar',
                'company_password.required' => 'Password tidak boleh kosong',
                'company_password.min' => 'Password minimal 8 karakter',
                'company_password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'company_password.numbers' => 'Password harus mengandung angka',
                'company_password.symbols' => 'Password harus mengandung simbol',
                'ktp.required' => 'KTP tidak boleh kosong',
                'ktp.file' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.required' => 'Foto tidak boleh kosong',
                'face.file' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran foto maksimal 10MB',
            ]);
            // $developer = Developer::findOrfail($id);

            $userDetails = Auth::user();  // To get the logged-in user details
            $users = User::find($userDetails->id);
            $developer = $userDetails->developers->first(); // Mengambil developer pertama terkait dengan pengguna

            if ($developer) {
                $users->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                $developer->update([
                    'company'   => $request->company,
                    'company_email' => $request->company_email,
                    'company_password' => bcrypt($request->company_password),
                    'address'   => $request->address,
                    'telp'  => $request->telp,
                ]);

                $images = ['ktp', 'face'];

                foreach ($images as $image) {
                    if ($request->hasFile($image)) {
                        // Hapus gambar lama jika sudah ada
                        if ($developer->$image) {
                            Storage::delete('public/' . $developer->$image);
                        }

                        // Simpan gambar baru
                        $imageField = $request->file($image);
                        $imageName = $imageField->getClientOriginalName() . "." . $imageField->getClientOriginalExtension();
                        $imageField->storeAs('public', $imageName);
                        $developer->$image = $imageName;
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

                $developer->users()->sync($users);
                $developer->save();
                $users->save();
            }
            // $developer->users()->sync($users->id);
            // $developer->save();
            // $developer->provinces()->sync($request->input('province_id'));
            // $developer->regencies()->sync($request->input('regency_id'));
            // $developer->districts()->sync($request->input('district_id'));
            // $developer->villages()->sync($request->xinput('village_id'));

            // $developer = Developer::where('id', '=', $developer->id)->get();
            // return redirect(route('developer.show', $id));
            return redirect()->back();
            // if (Auth::user()->role == "admin"){
            //     return redirect(route('developer.show', $id));
            // }else{
            //     // dd($users);
            // }
        } catch (Exception $e) {
            return $e;
        }
    }

    public function destroy(string $id)
    {
        try {

            $developer = Developer::findOrfail($id);
            $developer->owners()->delete();
            foreach ($developer->properties as $property) {
                foreach ($property->units as $unit) {
                    foreach ($unit->images() as $image) {
                        $imagePath = 'storage/' . $image->image;
                        Storage::delete($imagePath);
                        $image->delete();
                    }
                    $unit->specifications()->delete();
                    $unit->statuses()->detach();
                    $unit->delete();
                }

                $property->units()->delete();
                // $property->types()->delete();
                $property->agents()->detach();
                $property->provinces()->detach();
                $property->regencies()->detach();
                $property->districts()->detach();
                $property->villages()->detach();
                $property->delete();
            }
            $developer->provinces()->detach();
            $developer->regencies()->detach();
            $developer->districts()->detach();
            $developer->villages()->detach();
            $developer->delete();

            return  redirect(route('developer.index'));
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
            return redirect('/beranda')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
        }
    }
}
