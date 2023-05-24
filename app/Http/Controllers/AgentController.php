<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
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
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.agent.all', ['agents' => $data, 'tables' => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agent.create', []);
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
                'location'  => 'required',
                'ktp'    => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'phone_number'  => 'required',
            ]);

            $ktp = Str::random(8). "." . $request->ktp->getClientOriginalExtension();

            $data = Agent::create([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'name'  => $request->name,
                'address'   => $request->address,
                'location'  => $request->location,
                'ktp'   => $ktp,
                'phone_number'  => $request->phone_number,
            ]);

            Storage::disk('public')->put($ktp, file_get_contents($request->ktp));

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
                'email' => 'nullable|email|unique:agents',
                'password'  => 'nullable|min:8',
                'address'   => 'required',
                'location'  => 'required',
                'ktp'    => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:10240',
                'phone_number'  => 'required',
            ]);

            $data = Agent::findOrfail($id);

            $data->update([
                'name'  => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'location'  => $request->location,
                'phone_number'  => $request->phone_number,
            ]);

            if ($request->hasFile(`ktp`)) {
                $imageName = $request->ktp->getClientOriginalName(). "." . $request->ktp->getClientOriginalExtension();
                $image_path = Storage::disk('public')->put($imageName, file_get_contents($request->ktp));
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
                $data->ktp = $imageName;
            }

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
