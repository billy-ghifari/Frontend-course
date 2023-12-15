<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Kelas extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$allkelas);
        $kelas = json_decode($response)->data->data;

        // dd($kelas);

        return view('crudkelas/r_kelas', [
            'kelas' => $kelas,
            'urlapi' => $this->urlApi
        ]);
        return view('');
    }

    public function c_kelas()
    {
        return view('crudkelas/c_kelas');
    }

    public function u_update()
    {
        return view('crudkelas/u_kelas');
    }

    public function detailkelas()
    {
        return view('crudkelas/detailkelas');
    }

    public function createkelas()
    {
        return view('crudkelas/createkelas');
    }
}
