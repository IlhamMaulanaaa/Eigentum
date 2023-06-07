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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Agent::all();
        $tables = (new Agent())->getTable();

        if ($data) {
            return view('page.CariAgen.cariagen', ['agents' => $data, 'tables' => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agent.create', [
            'location' => Location::all()
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
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
                return ApiFormatter::createApi('201', 'Created', $data).redirect('/admin/agent/data',);
            } else {
                return ApiFormatter::createApi('400', 'Failed', null);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        return view('admin.agent.detail', [
            "agent" => $agent,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        return view('admin.agent.edit', [
            "agent" => $agent
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        try {
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
            $agent = Agent::findOrfail($id);
            $data = $agent->delete();

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Deleted', null). redirect('/admin/agent/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return $e;
        }
    }
}
