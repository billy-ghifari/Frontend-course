<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Blog extends Controller
{
    public function index()
    {
        $token = session('token');

        $response = Http::withToken($token)->get('http://127.0.0.1:1234/api/paginateblog');
        $blog = json_decode($response)->data->data;

        // dd($blog);
        // die;


        return view('blogpage', [
            'blogs' => $blog, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
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
