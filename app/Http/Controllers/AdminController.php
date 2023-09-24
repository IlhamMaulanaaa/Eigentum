<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    function index(){
        $admin = Admin::find(1);
        return redirect('admin/dashboard');
    }  

    function show(){
        $admin = auth()->user();
        return view('admin.profile', compact('admin'));
    }
    public function notifications()
    {
        $user = Auth::user();
        $notifications = $user->unreadNotifications;
        
        return view('admin.notification', compact('notifications'));
    }
    public function register(Request $request)
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

        Admin::create($data);

        $datalogin = [
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];


        if (Auth::attempt($datalogin)) {
            // return redirect('pasien/all')->with('success', Auth::user()->name . ' Berhasil Register');
            return redirect(route('beranda'))->with('success', Auth::user()->name . ' Berhasil Register');
        } else {
            return redirect('/session/signupuser/')->withErrors('Username atau Password yang dimasukkan tidak valid !!');
        }
    }
    public function page(){
        return view('auth.developer.signin');
    }
}
