<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Agent;
use Exception;
use Illuminate\Http\Request;

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
                'email' => 'required|email|unique:users',
                'password'  => 'required|min:8',
                'name'    => 'required',
                'address'   => 'required',
                'location'  => 'required',
                'ktp'    => 'required',
                'phone_number'  => 'required',
            ]);

            $data = Agent::create([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'name'  => $request->name,
                'address'   => $request->address,
                'location'  => $request->location,
                'ktp'   => $request->ktp,
                'phone_number'  => $request->phone_number,
            ]);

            $data = Agent::where('id', '=', $data->id)->get();

            if ($data) {
                return ApiFormatter::createApi('201', 'Created', $data).redirect('/admin/agent/data',);
            } else {
                return ApiFormatter::createApi('400', 'Failed', null);
            }
        } catch (Exception $e) {
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
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
                'email' => 'nullable|email|unique:agents',
                'password'  => 'nullable|min:8',
                'name'    => 'required',
                'address'   => 'required',
                'location'  => 'required',
                'ktp'    => 'required',
                'phone_number'  => 'required',
            ]);

            $data = Agent::findOrfail($id);

            $data->update([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'name'  => $request->name,
                'address'   => $request->address,
                'location'  => $request->location,
                'ktp'   => $request->ktp,
                'phone_number'  => $request->phone_number,
            ]);

            $data = Agent::where('id', '=', $data->id)->get();
            $url = '/admin/agent/show/' . $id;

            if ($data) {
                return ApiFormatter::createApi('200', 'Data Update', $data).redirect($url);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
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
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }
}
