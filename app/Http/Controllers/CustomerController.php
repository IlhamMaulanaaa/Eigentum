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
        $customers = Customer::all();
        $tables = (new Customer())->getTable();

        if ($customers) {
            return view('admin.customer.all', compact('customers','tables'));
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
                'address'  => 'required',
                'telp' => 'required|regex:/^[0-9+\-() ]+$/',
            ],[
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password minimal 8 karakter',
            ]);

            $customer = Customer::create([
                'name'   => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'telp'   => $request->telp,
            ]);

            if ($customer) {
                return redirect(route('customer.index'));
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
                'telp' => 'nullable|regex:/^[0-9+\-() ]+$/',
            ]);

            $customer = Customer::findOrfail($id);

            $customer->update([
                'name'   => $request->name,
                'email' => $request->email,
                'password'  => bcrypt($request->password),
                'address'   => $request->address,
                'telp'   => $request->telp,
            ]);

            $customer = Customer::where('id', '=', $customer->id)->get();
            if ($customer) {
                return redirect(route('customer.show', $id));
            } 
        
    }


    public function destroy($id)
    {
        $customer = Customer::findOrfail($id);
        $customer->delete();

        return redirect(route('customer.index'));
    }
}
