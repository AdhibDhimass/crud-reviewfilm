<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CastController extends Controller
{
    public function index()
    {
        $casts = DB::table('cast')->get();

        return view('cast.tampil', ['casts'=> $casts]);
    }

    public function create()
    {
        return view('cast.tambah');
    }

    public function store(Request $request)
    {
        //eror validasi
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        DB::table('cast')->insert([
            'nama' => $request ['nama'],
            'umur' => $request ['umur'],
            'bio' => $request ['bio']
        ]);
        return redirect('/cast');
    }

    public function show($id)
    {
        $kaka = DB::table('cast')->find($id);
        return view('cast.detail', ['kaka' => $kaka]);
    }

    public function edit($id)
    {
        $kaka = DB::table('cast')->find($id);
        return view('cast.edit', ['kaka' => $kaka]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required',
        ]);
        DB::table('cast')
        ->where('id', $id)
        ->update(
            [
                'nama' => $request ['nama'],
                'umur' => $request ['umur'],
                'bio' => $request ['bio']
            ]
        );
        return redirect('/cast');
    }

    public function destory($id)
    {
      $deleted =  DB::table('cast')->where('id', '=', $id)->delete();

        return redirect('/cast');
    }

}
