<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profill = profile::all();
        return view('profile.tampil', compact('profill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'umur' => 'required',
            'bio' => 'required',
            'alamat' => 'required',
            'user_id' => 'required'
        ]);

        Profile::create($validatedData);

        return redirect()->back()->with('success', 'Data profil telah disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profil = Profile::findOrFail($id); // Mencari profil berdasarkan ID, jika tidak ditemukan, akan menghasilkan ModelNotFoundException

        return view('profile.tampil', compact('Profile'));
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
