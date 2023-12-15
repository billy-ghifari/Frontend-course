<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Siswa extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$allsiswa);
        $siswa = json_decode($response)->data;

        // dd($siswa);
        // die;

        return view('ra_siswa/siswa', [
            'siswa' => $siswa,
            'urlapi' => $this->urlApi
        ]);
    }
}
