<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Favorite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $user = Auth::user();

        // Mengambil daftar favorit untuk pengguna
        $favorites = $user->units;
        // dd($favorite);
        return view('pages.page.favorite', compact('favorites'));
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

        return redirect('/favorite');
        // return "/pages.page.favorite";
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

        return redirect('/favorite');
    }


    public function destroyall()
    {
        $user = auth()->user();
        $unit = Favorite::where('unit_id' , $user->id);
       
        $unit->delete();

        return redirect('/favorite');
    }
}
