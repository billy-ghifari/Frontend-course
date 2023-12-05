<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_kelas extends Controller
{
    public function index()
    {
    }

    public function kelasadd()
    {
        return view('kelas.kelas-add');
    }

    public function kelasall()
    {
        return view('kelas.kelasall');
    }
}
