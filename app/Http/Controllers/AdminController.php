<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){
        $admin = Admin::find(1);
        return redirect('admin/dashboard');
    }
}
