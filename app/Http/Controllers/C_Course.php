<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Course extends Controller
{
    public function courseview()
    {
        return view('courseview');
    }

    public function index()
    {
        return view('course');
    }

    public function coursedetail()
    {
        return view('coursedetail');
    }
}
