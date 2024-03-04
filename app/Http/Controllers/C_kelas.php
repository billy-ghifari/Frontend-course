<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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
        // die;

        return view('crudkelas/r_kelas', [
            'kelas' => $kelas,
            'urlapi' => $this->urlApi
        ]);
        return view('');
    }

    public function c_kelas()
    {

        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$categorykelas);
        $category = json_decode($response)->data->original;

        // dd($category[0]);
        // die;

        return view('crudkelas/c_kelas', [
            'category' => $category
        ]);
    }

    public function creatingkelas(Request $request)
    {
        $token = session('token');

        try {

            $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$uuid . session('uuid'));
            $uuid = json_decode($response);

            $validate = Validator::make($request->all(), [
                'nama'             => 'required',
                'r_id_category'     => 'required',
                'deskripsi'           => 'required',
            ]);

            $validated = $validate->validated();
            $foto_thumbnail = fopen($request->file('foto_thumbnail'), 'r');


            $response = Http::withToken($token)
                ->attach('foto_thumbnail', $foto_thumbnail)
                ->post($this->urlApi . ApiEndPoint::$createkelas, [
                    'r_id_non_siswa'    => $uuid,
                    'nama'             => $validated['nama'],
                    'r_id_category'     => $validated['r_id_category'],
                    'deskripsi'           => $validated['deskripsi']
                ]);


            if ($response->successful()) {
                // Registration was successful
                // $responseData = $response->json();
                // dd($responseData);
                // die;
                return redirect('/viewkelas')->with('success', 'Membuat blog berhasil');
            } else {
                // Registration failed, handle errors
                $responseData = $response->json();
                dd($response);
                die;
                return back()->with('error', 'Pembuatan blog gagal: ' . $responseData['message']);
            }
        } catch (\Throwable $th) {
            // Handle exceptions, log errors, or perform other actions as needed
            dd($th);
            // dd($request->all());
            return back()->with('error', 'An error occurred during creating.');
        }
    }

    public function u_kelas($id)
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$categorykelas);
        $catkelas = json_decode($response)->data->original;

        // dd($catkelas);
        // die;

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$detailkelas . $id);
        $kelas = json_decode($response)->classData;

        $foto_thumbnail = json_decode($response)->classData->foto_thumbnail;
        return view('crudkelas/u_kelas', [
            'category' => $catkelas,
            'kelas' => $kelas,
            'foto' => $foto_thumbnail
        ]);
    }

    public function detailkelas($id)
    {

        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$detailkelas . $id);
        $kelas = json_decode($response);

        $response1 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$detailmateri . $id);
        $materi = json_decode($response1)->materi;


        // dd($kelas);
        // die;

        return view(
            'crudkelas/detailkelas',
            [
                'materi' => $materi,
                'kelas' => $kelas,
                'urlapi' => $this->urlApi,

            ]
        );
    }
}
