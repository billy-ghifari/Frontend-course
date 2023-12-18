<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Kelas extends Controller
{
    public function r_kelas()
    {
        return view('crudkelas/r_kelas');
    }

    public function c_kelas()
    {
        return view('crudkelas/c_kelas');
    }

    public function u_kelas()
    {
        return view('crudkelas/r_kelas');
    }
}
