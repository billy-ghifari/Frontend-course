<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Siswa extends Controller
{
    public function index()
    {
        return view('ra_siswa/siswa');
    }
}
