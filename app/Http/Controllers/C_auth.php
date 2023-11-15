<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_auth extends Controller
{
    public function index()
    {
        return view('auth');
    }
}
