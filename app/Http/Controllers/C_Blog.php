<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Blog extends Controller
{
    public function index()
    {
        return view('blog/blogpage');
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
        return view('crudblog/r_blog');
    }

    public function c_blog()
    {
        return view('crudblog/c_blog');
    }
}
