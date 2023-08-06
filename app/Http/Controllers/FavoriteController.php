<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Unit;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $favorite = Favorite::all();
        return view('pages.page.favorite',compact('favorite'));
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
    public function store(Request $request, string $id)
    {
        $unit = Unit::find($id);
        $user = auth()->user();
        
        $unit->users()->attach($user->id);
        session()->flash('success', 'unit is Added to Favorite Successfully !');

        return redirect()->route('unit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $unit = Unit::find($id);
        $user = auth()->user();
        $unit->users()->detach();
        session()->flash('success', 'unit is Remove to Favorite Successfully !');

        return redirect()->route('wishlist');
    }
}