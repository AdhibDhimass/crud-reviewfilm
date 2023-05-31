<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peran;
use App\Models\Film;
use App\Models\Cast;

class PeranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peran = Peran::all();
        return view('peran.tampil', compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pilm = Film::all();
        $casts = Cast::all();
        return view('peran.tambah', compact('pilm', 'casts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
            'nama' => 'required'
        ]);

        Peran::create($request->all());

        return redirect('/peran')->with('success', 'Peran created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peran $peran)
    {
        return view('peran.detail', compact('peran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peran $peran)
    {
        $pilm = Film::all();
        $casts = Cast::all();
        return view('peran.edit', compact('peran', 'pilm', 'casts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peran $peran)
    {
        $request->validate([
            'film_id' => 'required',
            'cast_id' => 'required',
        ]);

        $peran->update($request->all());

        return redirect()->route('peran.index')->with('success', 'Peran updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peran $peran)
    {
        $peran->delete();

        return redirect()->route('peran.index')->with('success', 'Peran deleted successfully');
    }
}
