<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Agent;
use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Property;
use App\Models\Province;
use Illuminate\Support\Str;
use App\Helper\ApiFormatter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class AgentController extends Controller
{
    public function signup()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();

        return view('auth.agent.signup', compact('provinces', 'regencies', 'districts', 'villages'));
    }
    public function updateApproved($id)
    {
        $data = Agent::find($id);

        $data->status = 'approved';
        $data->save();

        return redirect('admin/agent');
    }
    public function updateRejected($id)
    {
        $data = Agent::find($id);

        $data->status = 'rejected';
        $data->save();

        return redirect('admin/agent');
    }
    public function index()
    {
        $agents = Agent::filter(request(['search', 'regency_id']))->paginate(5);
        $tables = (new Agent())->getTable();
        $pivotTable = (new Agent())->regencies()->getTable();

        // Mendapatkan regencies yang terhubung deng  an developer melalui tabel pivot
        $regencies = Regency::whereIn('id', function ($query) use ($pivotTable) {
            $query->select('regency_id')
                ->from($pivotTable);
        })->pluck('name', 'id');
        if ($agents) {
            return view('admin.agent.all', compact('regencies', 'agents', 'tables'));
        }
    }

    public function filter(Request $request)
    {
        $agents = Agent::filter($request->all())->paginate(10);
        // $agents = Agent::with('users')->get();
        $countuser = User::where('role', 'user')->count();
        return view('pages.page.viewagent', compact('agents', 'countuser'));
    }

    public function createfront()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();


        return view('auth.agent.signup', compact('provinces', 'regencies', 'districts', 'villages'));
    }
    public function create()
    {
        $provinces = Province::all();
        $regencies = Regency::all();
        $districts = District::all();
        $villages = Village::all();


        return view('admin.agent.create', compact('provinces', 'regencies', 'districts', 'villages'));
    }

    public function storeFront(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'password'  =>  [
                    'required',
                    'string',
                ],
                'name'    => 'required',
                'address'   => 'required',
                'ktp'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'telp' => 'required|regex:/^[0-9+\-() ]+$/',
            ], [
                'email.required' => 'Email tidak boleh kosong',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password tidak boleh kosong',
                'password.min' => 'Password minimal 8 karakter',
                'name.required' => 'Nama tidak boleh kosong',
                'address.required' => 'Alamat tidak boleh kosong',
                'ktp.required' => 'KTP tidak boleh kosong',
                'ktp.image' => 'KTP harus berupa gambar',
                'ktp.mimes' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.required' => 'Foto tidak boleh kosong',
                'face.image' => 'Foto harus berupa gambar',
                'face.mimes' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran Foto maksimal 10MB',
                'telp.required' => 'Nomor telepon tidak boleh kosong',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
            ]);

            $imageArray = [];
            foreach ((['ktp', 'face']) as $fieldName) {
                $imageFileName = Str::random(8) . "." . $request->$fieldName->getClientOriginalExtension();
                $imageArray[] = $imageFileName;
                $request->$fieldName->storeAs('public', $imageFileName);
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => $request->role,
            ]);

            $agent = Agent::create([
                'address'   => $request->address,
                'ktp'   => $imageArray[0],
                'face'   => $imageArray[1],
                'telp'  => $request->telp,
            ]);

            $user->agents()->attach($agent->id);

            // Ambil province_id dari tabel pivot agent_province berdasarkan agent_id
            $regencyId = $request->regencies_id;
            $randomProperty = Property::whereHas('regencies', function ($query) use ($regencyId) {
                $query->where('regency_id', $regencyId);
            })->inRandomOrder()->first();

            if ($randomProperty) {
                $agent->properties()->attach($randomProperty->id);
            } else {
                $agent->save();
            }

            $agent->save();
            $agent->provinces()->attach($request->provinces_id);
            $agent->regencies()->attach($request->regencies_id);
            $agent->districts()->attach($request->districts_id);
            $agent->villages()->attach($request->villages_id);

            $agent = Agent::where('id', '=', $agent->id)->get();


            return redirect('/');
        } catch (Exception $e) {
            return $e;
        }
    }
    public function store(Request $request)
    {
        // try {
        $request->validate([
            'email' => 'required|email',
            'password'  =>  [
                'required',
                'string',
            ],
            'name'    => 'required',
            'address'   => 'required',
            'ktp'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'face'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
            'telp' => 'required|regex:/^[0-9+\-() ]+$/',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Password minimal 8 karakter',
            'name.required' => 'Nama tidak boleh kosong',
            'address.required' => 'Alamat tidak boleh kosong',
            'ktp.required' => 'KTP tidak boleh kosong',
            'ktp.image' => 'KTP harus berupa gambar',
            'ktp.mimes' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
            'ktp.max' => 'Ukuran KTP maksimal 10MB',
            'face.required' => 'Foto tidak boleh kosong',
            'face.image' => 'Foto harus berupa gambar',
            'face.mimes' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
            'face.max' => 'Ukuran Foto maksimal 10MB',
            'telp.required' => 'Nomor telepon tidak boleh kosong',
            'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
        ]);

        $imageArray = [];
        foreach ((['ktp', 'face']) as $fieldName) {
            $imageFileName = Str::random(8) . "." . $request->$fieldName->getClientOriginalExtension();
            $imageArray[] = $imageFileName;
            $request->$fieldName->storeAs('public', $imageFileName);
        }

        $agent = Agent::create([
            'address'   => $request->address,
            'ktp'   => $imageArray[0],
            'face'   => $imageArray[1],
            'telp'  => $request->telp,
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'developer',
        ]);

        $user->agents()->attach($agent->id);

        // Ambil province_id dari tabel pivot agent_province berdasarkan agent_id
        $regencyId = $request->regencies_id;
        $randomProperty = Property::whereHas('regencies', function ($query) use ($regencyId) {
            $query->where('regency_id', $regencyId);
        })->inRandomOrder()->first();

        if ($randomProperty) {
            $agent->properties()->attach($randomProperty->id);
        } else {
            $agent->save();
        }

        $agent->save();
        $agent->provinces()->attach($request->provinces_id);
        $agent->regencies()->attach($request->regencies_id);
        $agent->districts()->attach($request->districts_id);
        $agent->villages()->attach($request->villages_id);

        $agent = Agent::where('id', '=', $agent->id)->get();


        return redirect(route('agent.index'));
        // } catch (Exception $e) {
        //     return $e;
        // }

    }

    public function show(Agent $agent)
    {
        if (Auth::user()->role == 'admin') {
            return view('admin.agent.detail', compact('agent'));
        } else {
            return view('pages.agent.detail', compact('agent'));
        }
    }
    public function dashboard(Agent $agent)
    {
        // Assuming you want to get the associated users for the specific agent
        $user =  auth()->user();
        $agent = $user->agents->first();

        return view('pages.agent.dashboard', compact('agent', 'user'));
    }

    public function edit(Agent $agent)
    {
        $user =  auth()->user();
        $agents = $user->agents->first();
        if (Auth::user()->role == 'admin') {
            return view('admin.agent.edit', compact('agent'));
        } else {
            return view('pages.agent.profile', compact('agents'));
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name'    => 'nullable',
                'email' => 'nullable|email',
                'password'  => [
                    'nullable',
                    'string',
                ],
                'address'   => 'nullable',
                'ktp'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'telp' => 'nullable|regex:/^[0-9+\-() ]+$/',
            ], [
                'email.email' => 'Email tidak valid',
                'password.min' => 'Password minimal 8 karakter',
                'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'password.numbers' => 'Password harus mengandung angka',
                'password.symbols' => 'Password harus mengandung simbol',
                'ktp.image' => 'KTP harus berupa gambar',
                'ktp.mimes' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.image' => 'Foto harus berupa gambar',
                'face.mimes' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran Foto maksimal 10MB',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
            ]);

            $agent = Agent::findOrfail($id);
            $users = $agent->users->first(); 

            if($agent){
                $users->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                $agent->update([
                    'address'   => $request->address,
                    'telp'  => $request->telp,
                ]);
    
                $images = ['ktp', 'face'];
                foreach ($images as $key => $image) {
                    if ($request->hasFile($image)) {
                        $imageName = $request->{$image}->getClientOriginalName() . "." . $request->{$image}->getClientOriginalExtension();
                        $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->{$image}));
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        $agent->{$image} = $imageName;
                    }
                }
                $agent->users()->sync($users);
                $users->save();
                $agent->save();
            }

            
            return redirect(route('agent.show', $id));
        } catch (Exception $e) {
            return $e;
        }
    }
    public function updateFront(Request $request, string $id)
    {
        try {
            $request->validate([
                'name'    => 'nullable',
                'email' => 'nullable|email',
                'password'  => [
                    'nullable',
                    'string',
                ],
                'address'   => 'nullable',
                'ktp'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'telp' => 'nullable|regex:/^[0-9+\-() ]+$/',
            ], [
                'email.email' => 'Email tidak valid',
                'password.min' => 'Password minimal 8 karakter',
                'password.mixed_case' => 'Password harus mengandung huruf besar dan kecil',
                'password.numbers' => 'Password harus mengandung angka',
                'password.symbols' => 'Password harus mengandung simbol',
                'ktp.image' => 'KTP harus berupa gambar',
                'ktp.mimes' => 'KTP harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'ktp.max' => 'Ukuran KTP maksimal 10MB',
                'face.image' => 'Foto harus berupa gambar',
                'face.mimes' => 'Foto harus berupa file dengan format jpg, png, jpeg, gif, svg',
                'face.max' => 'Ukuran Foto maksimal 10MB',
                'telp.regex' => 'Nomor telepon hanya boleh berisi angka, +, -, (, ), dan spasi',
            ]);

            // $agent = Agent::findOrfail($id);

            $userDetails = Auth::user();  // To get the logged-in user details
            $users = User::find($userDetails->id);
            $agent = $users->agents->first();

            if($agent){
                $users->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                $agent->update([
                    'address'   => $request->address,
                    'telp'  => $request->telp,
                ]);
    
                $images = ['ktp', 'face'];
                foreach ($images as $key => $image) {
                    if ($request->hasFile($image)) {
                        $imageName = $request->{$image}->getClientOriginalName() . "." . $request->{$image}->getClientOriginalExtension();
                        $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->{$image}));
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        $agent->{$image} = $imageName;
                    }
                }
                $agent->users()->sync($users);
                $users->save();
                $agent->save();
            }
            
            // $agent = Agent::where('id', '=', $agent->id)->get();
            return redirect()->back();
        } catch (Exception $e) {
            return $e;
        }
    }

    public function destroy(string $id)
    {

        $agent = Agent::findOrfail($id);
        $agent->properties()->detach();
        $agent->provinces()->detach();
        $agent->regencies()->detach();
        $agent->districts()->detach();
        $agent->villages()->detach();
        $agent = $agent->delete();

        if ($agent) {
            return  redirect(route('agent.index'));
        }
    }
}
