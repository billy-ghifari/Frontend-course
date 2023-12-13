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
        return view('blog\blogdetail');
    }

    public function searchview()
    {
        return view('search');
    }

    public function r_blog()
    {
        return view('r_blog');
    }

    public function c_blog()
    {
        return view('c_blog');
    }
}
