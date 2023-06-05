<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\User;
use App\Models\Developer;


class DashboardController extends Controller
{
    public function index()
    {
        $developerCount = Developer::count();
        $agentCount = Agent::count();
        $customerCount = Customer::count();
        $userCount = User::count();
        return view('admin.dashboard.all', compact('developerCount', 'agentCount', 'customerCount', 'userCount',));

    }
}
