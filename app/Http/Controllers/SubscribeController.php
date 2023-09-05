<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribes = Subscribe::all();
        $tables = (new Subscribe())->getTable();

        return view('admin.subscribe.all', compact('subscribes', 'tables'));
    }

    public function indexFront()
    {
        $subscribes = Subscribe::all();
        $tables = (new Subscribe())->getTable();
        if (Auth::check() && Auth::user()->role == "developer") {
            return view('pages.page.subscribe', compact('subscribes', 'tables'));
        } else {
            return Redirect()->back();
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscribe $subscribe)
    {
        return view('pages.page.subdetail', compact('subscribe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscribe $subscribe)
    {
        return view('admin.subscribe.edit', compact('subscribe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
