<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use App\Models\Agent;
use App\Models\Customer;
use App\Models\Property;
use App\Models\Developer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //     public function __construct()
    // {
    //     $this->middleware('IsAdmin:1');
    // }

    public function index()
    {
        $developerCount = Developer::count();
        $propertyCount = Property::count();
        $agentCount = Agent::count();
        $unitCount = Unit::count();
        $userCount = User::count();
        return view('admin.dashboard.all', compact('developerCount', 'agentCount', 'unitCount', 'userCount', 'propertyCount'));
    }
}
