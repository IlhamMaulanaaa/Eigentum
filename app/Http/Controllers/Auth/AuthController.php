<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('auth.signin');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials) && Auth::user()->role == "admin") {
            return redirect('/admin')->with('success', 'Berhasil Login');
        } elseif (Auth::attempt($credentials) && Auth::user()->role == "developer") {
            return redirect('/developer/dashboard')->with('success', 'Berhasil Login');
        } elseif (Auth::attempt($credentials) && Auth::user()->role == "agent") {
            return redirect('/agent/dashboard')->with('success', 'Berhasil Login');
        } elseif (Auth::attempt($credentials) && Auth::user()->role == "user") {
            return redirect('/beranda')->with('success', 'Berhasil Login');
        } else {
            return redirect('/');
        }
    }
    public function register(Request $request)
    {
        Session::flash('name', $request->name);
        session::flash('email', $request->email);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>  'required|min:6'
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password)
        ];

        User::create($data);

        $datalogin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($datalogin) && Auth::user()->role == "admin") {
            return redirect('/admin')->with('success', 'Berhasil Login');
        } elseif (Auth::attempt($datalogin) && Auth::user()->role == "developer") {
            return redirect('/developer/dashboard')->with('success', 'Berhasil Login');
        } elseif (Auth::attempt($datalogin) && Auth::user()->role == "agent") {
            return redirect('/agent/dashboard')->with('success', 'Berhasil Login');
        } elseif (Auth::attempt($datalogin) && Auth::user()->role == "user") {
            return redirect('/beranda')->with('success', 'Berhasil Login');
        } else {
            return redirect('/beranda');
        }
    }
}
