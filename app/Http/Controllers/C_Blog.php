<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Blog extends Controller
{
    public function index()
    {
        return view('blogpage');
    }

    public function blogdetail()
    {
        return view('blogdetail');
    }

    public function searchview()
    {
        return view('search');
    }

    public function test()
    {
        return view('test');
    }
}
