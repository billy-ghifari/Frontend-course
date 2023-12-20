<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use App\Models\kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Course extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function courseview()
    {
        return view('course\courseview');
    }

    public function index()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginatekelas);
        $kelas = json_decode($response)->data->data;

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginatesomekelas);
        $somekelas = json_decode($response)->data->data;


        if (!$kelas) {
            return response()->json('tidak ditemukan');
        }

        if (!$somekelas) {
            return response()->json('tidak ditemukan');
        }

        // dd($kelas);
        // die;

        return view('course.course', [
            'somekelas' => $somekelas,
            'kelas' => $kelas,
            'urlapi' => $this->urlApi,
        ]);
    }

    public function coursedetail()
    {
        return view('course/coursedetail');
    }
}
