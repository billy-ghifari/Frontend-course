<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Mentor extends Controller
{
    public function r_mentor()
    {
        return view('crudmentor/r_mentor');
    }

    public function c_mentor()
    {
        return view('crudmentor/c_mentor');
    }

    public function u_mentor()
    {
        return view('crudmentor/u_mentor');
    }

    public function d_mentor()
    {
        return view('crudmentor/d_mentor');
    }
}
