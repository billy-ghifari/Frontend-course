<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Blog extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$getonekelas);
        $kelas = json_decode($response)->data;

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginateblog);
        $blog = json_decode($response)->data->data;

        $response2 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$categoryblog);
        $catblog = json_decode($response2)->data;

        $response3 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginatesomeblog);
        $someblog = json_decode($response3)->data->data;

        $someblogskip = array_slice($someblog, 2);

        // dd($kelas);
        // die;


        return view('blogpage', [
            'blog' => $blog,
            'catblog' => $catblog,
            'someblog' => $someblog,
            'someblogskip' => $someblogskip,
            'kelas' => $kelas,
            'urlapi' => $this->urlApi, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
    }

    public function blogdetail()
    {
        $token = session('token');

        $response3 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginatesomeblog);
        $someblog = json_decode($response3)->data->data;

        $someblogskip = array_slice($someblog, 2);

        return view('blogdetail', [
            'someblog' => $someblog,
            'someblogskip' => $someblogskip,
            'urlapi' => $this->urlApi, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
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
