<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_Blog extends Controller
{
    public function index()
    {
        return view('blogpage');
    }
}
