<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Kelas extends Controller
{
    public function index()
    {
        return view('r_kelas');
    }

    public function c_kelas()
    {
        return view('c_kelas');
    }

    public function u_update()
    {
        return view('u_kelas');
    }
}
