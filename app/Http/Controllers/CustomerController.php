<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Customer;
use Illuminate\Http\Request;
use Exception;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Customer::all();
        $tables = (new Customer())->getTable();

        if ($data) {
            // return ApiFormatter::createApi('200', 'Success', $data);
            return view('admin.customer.all', ['customers' => $data , 'tables' => $tables]);
        } else {
            return ApiFormatter::createApi('404', 'Data Not Found', null);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name'   => 'required',
                'email' => 'required|email|unique:customers',
                'password'  => 'required|min:8',
                'address'  => 'nullable',
                'phone_number'   => 'nullable',
            ],[
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal 8 karakter',
            ]);

            $data = Customer::create([
                'name'   => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'phone_number'   => $request->phone_number,
            ]);

            if ($data) {
                return ApiFormatter::createApi('201', 'Created', $data).redirect('/admin/customer/data',);
            } else {
                return ApiFormatter::createApi('400', 'Bad Request', null);
            }
        } catch (Exception $e) {
            return $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.detail', [
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', [
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name'   => 'nullable',
                'email' => 'nullable|email',
                'password'  => 'nullable|min:8',
                'address'  => 'nullable',
                'phone_number'   => 'nullable',
            ]);

            $data = Customer::findOrfail($id);

            $data->update([
                'name'   => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'phone_number'   => $request->phone_number,
            ]);

            $data = Customer::where('id', '=', $data->id)->get();
            $url = '/admin/customer/show/' . $id;

            if ($data) {
                return ApiFormatter::createApi('201', 'Created', $data).redirect($url);
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
    public function destroy(Customer $customer)
    {
        $data = Customer::where('id', $customer->id)->delete();

        if ($data) {
            return ApiFormatter::createApi('200', 'Success', $data). redirect('/admin/unit/data',);
        } else {
            return ApiFormatter::createApi('400', 'Bad Request', null);
        }
    }
}
