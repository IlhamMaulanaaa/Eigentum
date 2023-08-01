<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session(['role' => $user->role]);
        }elseif (Auth::guard('developer')->attempt($credentials)) {
            return redirect('/developer/dashboard')->with('success', 'Berhasil Login');
        } elseif (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin/dashboard')->with('success', 'Berhasil Login');
        } elseif (Auth::guard('web')->attempt($credentials)) {
            return redirect('/beranda')->with('success', 'Berhasil Login');
        } else {
            return redirect('/session/auth/developer/signin/')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
        }
    }
}
