<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Kelas extends Controller
{
    public function index()
    {
        return view('crudkelas/r_kelas');
    }

    public function c_kelas()
    {
        return view('crudkelas/c_kelas');
    }

    public function u_update()
    {
        return view('crudkelas/u_kelas');
    }

    public function detailkelas()
    {
        return view('crudkelas/detailkelas');
    }

    public function createkelas()
    {
        return view('crudkelas/createkelas');
    }
}
