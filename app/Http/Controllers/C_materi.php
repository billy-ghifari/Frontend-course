<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_materi extends Controller
{
    public function index()
    {
    }

    public function addmateri()
    {
        return view('materi.materi-add');
    }
}
