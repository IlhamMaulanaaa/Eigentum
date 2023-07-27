<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
use App\Models\Province;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AgentController extends Controller
{

    public function index()
    {
        $agents = Agent::all();
        $tables = (new Agent())->getTable();

        if ($agents) {
            return view('admin.agent.all', compact('agents', 'tables'));
        }
    }


    public function create()
    {
        $provinces = Province::all();
        
        return view('admin.agent.create', compact('provinces'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'email' => 'required|email|unique:agents',
                'password'  => 'required|min:8',
                'name'    => 'required',
                'address'   => 'required',
                'ktp'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'telp'  => 'required',
            ]);
            
            $imageArray = [];
                foreach ((['ktp', 'face']) as $fieldName) {
                    $imageFileName = Str::random(8) . "." . $request->$fieldName->getClientOriginalExtension();
                    $imageArray[] = $imageFileName;
                    $request->$fieldName->storeAs('public', $imageFileName);
                }

            $agent = Agent::create([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'name'  => $request->name,
                'address'   => $request->address,
                'ktp'   => $imageArray[0],
                'face'   => $imageArray[1],
                'telp'  => $request->telp,
            ]);

            $agent->save();
            
            
            $agent->provinces()->attach($request->provinces_id);
            $agent->regencies()->attach($request->regencies_id);
            $agent->districts()->attach($request->districts_id);
            $agent->villages()->attach($request->villages_id);
            
            $agent = Agent::where('id', '=', $agent->id)->get();
            
            if ($agent) {
                return redirect('/admin/agent/data');
            } else {
                return ApiFormatter::createApi('400', 'Failed', null);
            }

        } catch (Exception $e) {
            return $e;
        }
        
    }

    public function show(Agent $agent)
    {
        return view('admin.agent.detail', compact('agent'));
    }

    public function edit(Agent $agent)
    {
        return view('admin.agent.edit', compact('agent'));
    }


    public function update(Request $request,string $id)
    {
        
            $request->validate([
                'name'    => 'required',
                'email' => 'nullable|email',
                'password'  => 'nullable|min:8',
                'address'   => 'required',
                'ktp'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'telp'  => 'required',
            ]);

            $agent = Agent::findOrfail($id);

            $agent->update([
                'name'  => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'telp'  => $request->telp,
            ]);

            $images = ['ktp', 'face'];
                foreach ($images as $key => $image) {
                    if ($request->hasFile($image)) {
                        $imageName = $request->{$image}->getClientOriginalName(). "." . $request->{$image}->getClientOriginalExtension();
                        $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->{$image}));
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        $agent->{$image} = $imageName;
                    }
            }

            $agent->save();


            $agent = Agent::where('id', '=', $agent->id)->get();
            $url = '/admin/agent/show/' . $id;

            return redirect($url);
        
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
                return  redirect('/admin/agent/data',);
            } 
        
    }
}
