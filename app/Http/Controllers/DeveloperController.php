<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Developer;
use Exception;
use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Developer::all();
        $tables = (new Developer())->getTable();


        if ($data) {
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.developer.all', ['developers' => $data, 'tables' => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('admin.developer.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:developers',
                'password'  => 'required|min:8',
                'company'   => 'required',
                'address'  => 'required',
                'owner' => 'required',
                'license'   => 'required',
                'phone_number'  => 'required',
            ]);



            $data = Developer::create([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'company'   => $request->company,
                'address'   => $request->address,
                'owner' => $request->owner,
                'license'   => $request->license,
                'phone_number'  => $request->phone_number,
            ]);

            $developer = Developer::where('id', '=', $data->id)->get();

            if ($developer) {
                return ApiFormatter::createApi('200', 'Data Created', $data). redirect('/admin/develop/data',);
                // .redirect('/admin/unit/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return ApiFormatter::createApi('400', 'Failed', $e);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        return view('admin.developer.detail', [
            'develop' => $developer
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Developer $developer)
    {
        return view('admin.developer.edit', [
            'develop' => $developer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Developer $developer,string $id)
    {
        try {
            $request->validate([
                'email' => 'required|email|unique:developers',
                'password'  => 'required|min:8',
                'company'   => 'required',
                'address'  => 'required',
                'owner' => 'required',
                'license'   => 'required',
                'phone_number'  => 'required',
            ]);

            $developer= Developer::findOrfail($id);

            $developer->update([
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'company'   => $request->company,
                'address'   => $request->address,
                'owner' => $request->owner,
                'license'   => $request->license,
                'phone_number'  => $request->phone_number
            ]);

            $developer = Developer::where('id', '=', $developer->id)->get();

            return ApiFormatter::createApi('201', 'Success', $developer);
        } catch (Exception $e) {
            return ApiFormatter::createApi('400', 'Failed', $e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        try {
            $developer = Developer::findOrfail($id);

            $data = $developer->delete();
            if ($data) {
                return ApiFormatter::createApi('200', 'Success', $data). redirect('/admin/develop/data',);
            } else {
                return ApiFormatter::createApi('400', 'Failed', null);
            }
        } catch (Exception $e) {
            return ApiFormatter::createApi('500', 'Internal Server Error', null);
        }
    }
}
