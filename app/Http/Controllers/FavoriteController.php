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

        if (!$unit) {
            // Handle the case where the unit does not exist in the database
            session()->flash('error', 'Unit not found!');
            return redirect('/favorite');
        }

        if ($user->units->contains($unit)) {
            // Unit is already in favorites, remove it
            $user->units()->detach($unit->id);
            session()->flash('success', 'Unit removed from favorites!');
            return redirect()->back();
        } else {
            // Unit is not in favorites, add it
            $user->units()->attach($unit->id);
            session()->flash('success', 'Unit added to favorites!');
            return redirect('/favorite');
        }
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
        $unit = Favorite::where('unit_id', $user->id);

        $unit->delete();

        return redirect('/favorite');
    }
}
