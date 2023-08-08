<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        return redirect('admin/dashboard');
    }  

    function show(){
        $admin = auth()->user();
        return view('admin.profile', compact('admin'));
    }
}
