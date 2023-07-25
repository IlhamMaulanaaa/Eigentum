<?php

namespace App\Http\Controllers;

use App\Helper\ApiFormatter;
use App\Models\Customer;
use Illuminate\Http\Request;
use Exception;

class CustomerController extends Controller
{   

    public function index()
    {
        $data = Customer::all();
        $tables = (new Customer())->getTable();

        if ($data) {
            return view('admin.customer.all', ['customers' => $data , 'tables' => $tables]);
        }
    }


    public function create()
    {
        return view('admin.customer.create');
    }


    public function store(Request $request)
    {
        
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
            } 
        
    }


    public function show(Customer $customer)
    {
        return view('admin.customer.detail', [
            'customer' => $customer
        ]);
    }

   
    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', [
            'customer' => $customer
        ]);
    }


    public function update(Request $request, string $id)
    {
        
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
            } 
        
    }


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
