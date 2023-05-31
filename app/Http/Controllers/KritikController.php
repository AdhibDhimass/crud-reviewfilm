<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritik;
use App\Models\Film;
use App\Models\User;

class KritikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kritiks = Kritik::all();
        return view('kritik.tampil', compact('kritiks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //$users = User::all();
        error_log('tes');
        return view('kritik.tambah',['film'=> Film::all()],['users'=> User::all()] );
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        error_log('tes');
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'content' => 'required',
            'poin' => 'required',
        ]);

        $kritiks = new Kritik;

        error_log($kritiks);

        $kritiks->user_id = $request->user_id;
        $kritiks->film_id = $request->film_id;
        $kritiks->content = $request->content;
        $kritiks->poin = $request->poin;

        $kritiks->save();

        return redirect()->route('kritik.index')->with('success', 'Review created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('kritik.detail', compact('kritiks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $kritiks = Kritik::findOrFail($id);
        $users = User::all();
        $film = Film::all();

    return view('kritik.edit', compact('kritiks', 'users', 'film'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kritik $kritiks)
    {
        $request->validate([
            'user_id' => 'required',
            'film_id' => 'required',
            'rating' => 'required',
            'comment' => 'required',
        ]);

        $kritiks->update($request->all());

        return redirect()->route('kritik.index')->with('success', 'Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kritik $kritiks)
    {
        $kritiks->delete();

        return redirect()->route('kritik.index')->with('success', 'Review deleted successfully');

    }
}
