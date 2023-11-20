<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_admin extends Controller
{
    public function index()
    {
    }

    public function admin()
    {
        return view('adminpage');
    }
}
