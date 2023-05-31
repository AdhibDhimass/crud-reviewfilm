<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $genree = Genre::all();
        return view('genre.tampil', compact('genree'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    $validateData = $request->validate([
        'nama' => 'required'
    ]);

    Genre::create( $validateData );

    return redirect()->route('genre.index')->with('success', 'Genre berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::findOrFail($id); // Mencari genre berdasarkan ID, jika tidak ditemukan, akan menghasilkan ModelNotFoundException

        return view('genre.show', compact('genre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    $genre = Genre::findOrFail($id); // Mencari genre berdasarkan ID, jika tidak ditemukan, akan menghasilkan ModelNotFoundException

    return view('genre.edit', compact('genre'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $genre = Genre::findOrFail($id); // Mencari genre berdasarkan ID, jika tidak ditemukan, akan menghasilkan ModelNotFoundException

        $genre->nama = $request->input('nama'); // Update data genre

        $genre->save(); // Menyimpan perubahan ke database

        return redirect()->route('genre.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::findOrFail($id); // Mencari genre berdasarkan ID, jika tidak ditemukan, akan menghasilkan ModelNotFoundException

        $genre->delete(); // Menghapus genre

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }
}
