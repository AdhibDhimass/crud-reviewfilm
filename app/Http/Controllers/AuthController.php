<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function table()
    {
        return view('table');
    }

    public function data()
    {
        return view('data-table ');
    }
}
