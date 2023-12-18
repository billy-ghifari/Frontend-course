<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_admin extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        $role = session('role');
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$getallonsiswa);
        $siswaon = json_decode($response);

        $response2 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$countkelas);
        $countkelas = json_decode($response2);

        $response3 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$countmateri);
        $countmateri = json_decode($response3);

        $response4 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$countblog);
        $countblog = json_decode($response4);

        // dd($countmateri);
        // die; 

        return view('adminpage', [
            'role' => $role,
            'siswa' => $siswaon,
            'kelas' => $countkelas,
            'materi' => $countmateri,
            'blog' => $countblog,
            'urlapi' => $this->urlApi, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
    }

    public function r_admin()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$alladmin);
        $admin = json_decode($response)->data->original;

        // dd($admin);
        // die;

        return view('r_admin', [
            'admin' => $admin
        ]);
    }

    public function c_admin()
    {
        return view('crudadmin/c_admin');
    }

    public function u_admin()
    {
        return view('crudadmin/u_admin');
    }

    public function d_admin()
    {
        return view('crudadmin/d_admin');
    }
}
