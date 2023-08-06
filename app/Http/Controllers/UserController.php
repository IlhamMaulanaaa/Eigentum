<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        dd($users());
    }
}
