<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pilm = Film::all();
        return view('film.tampil', compact('pilm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('film.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required|integer',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'genre_id' => 'required|exists:genres,id',
        ]);

        // Upload poster
        $posterPath = $request->file('poster')->store('posters');

        $validatedData['poster'] = $posterPath;

        Film::create($validatedData);

        return redirect()->route('film.tampil')->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('film.tampil', compact('film'));
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
        //
    }
}
