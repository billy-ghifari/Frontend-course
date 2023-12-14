<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_admin extends Controller
{
    public function index()
    {
        return view('adminpage');
    }

    public function r_admin()
    {
        return view('crudadmin/r_admin');
    }

    public function c_admin()
    {
        return view('crudadmin/c_admin');
    }

    public function u_admin()
    {
        return view('crudadmin/u_admin');
    }

    public function d_admin()
    {
        return view('crudadmin/d_admin');
    }
}
