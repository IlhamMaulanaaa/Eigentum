<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KPRController extends Controller
{
    public function index()
    {
        return view('page.KPR.kpr');
    }
}
