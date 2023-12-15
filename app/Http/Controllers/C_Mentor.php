<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class C_Mentor extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function r_mentor()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$allmentor);
        $mentor = json_decode($response)->data->original->data;

        // dd($mentor);
        // die;

        return view('crudmentor/r_mentor', [
            'mentor' => $mentor
        ]);
    }

    public function c_mentor()
    {
        return view('crudmentor/c_mentor');
    }

    public function u_mentor()
    {
        return view('crudmentor/u_mentor');
    }

    public function d_mentor()
    {
        return view('crudmentor/d_mentor');
    }
}
