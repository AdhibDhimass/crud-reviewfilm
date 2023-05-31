<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\Genre;


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
        return view('film.tambah', [
            'genree' => Genre::all()
        ]);
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
            'genre_id' => 'required|exists:genre_id',
        ]);

        // Upload poster
        $postername = time().'.'.$request->poster->extension();
        $request->poster->move(public_path('poster'), $postername);

        $film = new Film();
        $film->judul = $request->judul;
        $film->ringkasan = $request->ringkasan;
        $film->tahun = $request->tahun;
        $film->poster = $postername;
        $film->genre_id = $request->genre_id;
        $film->save();

        return redirect('/film')->with('success', 'Film created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Film $film)
    {
        return view('film.detail', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $film = Film::findOrFail($id);
        $genree = Genre::all();
        return view('film.edit', compact('film', 'genree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        $validatedData = $request->validate([
            'judul' => 'required',
            'tahun' => 'required|integer',
            // tambahkan validasi untuk atribut lainnya
        ]);

        $film->update($validatedData);

        return redirect('/film')->with('success', 'Film updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $film = Film::findOrFail($id);
        $film->delete();

        return redirect('/film')->with('success', 'Film deleted successfully');
    }
}
