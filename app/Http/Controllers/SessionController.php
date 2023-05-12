<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function signin()
    {
        return view('auth.signin');
    }

    public function signup()
    {
        return view('auth.signup');
    }

    public function postSignin(Request $request)
    {
        Session::flash('email', $request->email);
        $this->validate($request, [
            'email' => 'required|email',
            'password' =>  'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            // return redirect('pasien/all')->with('success', 'Berhasil Login');
            return redirect('/admin')->with('success', 'Berhasil Login');
        } else {
            return redirect('/session/signin/')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
        }
    }

    public function postSignup(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>  'required|min:6'
        ]);

        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ];
        
        User::create($data);
        
        $datalogin = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if (Auth::attempt($datalogin)) {
            // return redirect('pasien/all')->with('success', Auth::user()->name . ' Berhasil Register');
            return redirect('/admin')->with('success', Auth::user()->name . ' Berhasil Register');
        } else {
            return redirect('/session/signup/')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
        }
    }

    public function signout()
    {
        auth()->logout();

        return redirect('/session/signin');
    }
}
