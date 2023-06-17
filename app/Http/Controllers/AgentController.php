<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
use App\Models\Location;
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


    public function create(Location $location)
    {
        return view('admin.agent.create',compact('location'));
    }

    public function store(Request $request)
    {
            $request->validate([
                'email' => 'required|email|unique:agents',
                'password'  => 'required|min:8',
                'name'    => 'required',
                'address'   => 'required',
                'ktp'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'face'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'phone_number'  => 'required',
                'location_id' => 'required'
            ]);
            
            $imageArray = [];
                foreach ((['ktp', 'face']) as $fieldName) {
                    $imageFileName = Str::random(8) . "." . $request->$fieldName->getClientOriginalExtension();
                    $imageArray[] = $imageFileName;
                    $request->$fieldName->storeAs('public', $imageFileName);
                }

            $data = Agent::create([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'name'  => $request->name,
                'address'   => $request->address,
                'ktp'   => $imageArray[0],
                'face'   => $imageArray[1],
                'phone_number'  => $request->phone_number,
                'location_id' => $request->location_id
            ]);

            $data->save();
            
            $data = Agent::where('id', '=', $data->id)->get();

            if ($data) {
                return redirect('/admin/agent/data');
            } else {
                return ApiFormatter::createApi('400', 'Failed', null);
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
                'phone_number'  => 'required',
                'location_id' => 'nullable'
            ]);

            $data = Agent::findOrfail($id);

            $data->update([
                'name'  => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'phone_number'  => $request->phone_number,
                'location_id'  => $request->location_id,
            ]);

            $images = ['ktp', 'face'];
                foreach ($images as $key => $image) {
                    if ($request->hasFile($image)) {
                        $imageName = $request->{$image}->getClientOriginalName(). "." . $request->{$image}->getClientOriginalExtension();
                        $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->{$image}));
                        if (File::exists($image_path)) {
                            File::delete($image_path);
                        }
                        $data->{$image} = $imageName;
                    }
            }

            $data->save();

            $data = Agent::where('id', '=', $data->id)->get();
            $url = '/admin/agent/show/' . $id;

            return redirect($url);
        
    }


    public function destroy(string $id)
    {
        
            $agent = Agent::findOrfail($id);
            $agent->properties()->detach();
            $data = $agent->delete();

            if ($data) {
                return  redirect('/admin/agent/data',);
            } 
        
    }
}
