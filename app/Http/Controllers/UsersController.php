<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profill = User::all();
        return view('users.tampil', compact('profill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create( $validateData );

        return redirect()->back()->with('success', 'User berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show( User $user)
    {
        return view('users.detail', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( User $user)
    {
        return view('users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  User $user)
    {
        $validatedUserData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'required',
        ]);

        // Update data user
        $user->update($validatedUserData);

        // Redirect ke halaman detail user
        return redirect()->route('users.index', $user->id)->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        // Redirect ke halaman index user
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
