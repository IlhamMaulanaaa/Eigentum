<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\User;
use App\Models\Developer;
use App\Models\Unit;

class DashboardController extends Controller
{
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
