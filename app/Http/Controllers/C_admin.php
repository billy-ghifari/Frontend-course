<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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

        // dd($response);
        // die;

        return view('crudadmin/r_admin', [
            'admin' => $admin
        ]);
    }

    public function c_admin()
    {
        return view('crudadmin/c_admin');
    }

    public function makeadmin(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name'     => 'required',
                'email'    => 'required|email|unique:users',
                'password' => 'required',
            ]);

            $validated = $validate->validated();
            $photo = fopen($request->file('photo'), 'r');


            $response = Http::attach('photo', $photo)
                ->post($this->urlApi . ApiEndPoint::$makeadmin, [
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => $validated['password'],
                ]);

            dd($response);
            die;

            if ($response->successful()) {
                // Registration was successful
                return redirect('/viewadmin')->with('success', 'Admin baru telah ditambahkan');
            } else {
                // Registration failed, handle errors
                $responseData = $response->json();
                return back()->with('error', 'Pembuatan gagal: ' . $responseData['message']);
            }
        } catch (\Throwable $th) {
            // Handle exceptions, log errors, or perform other actions as needed
            dd($th);
            // dd($request->all());
            return back()->with('error', 'Gagal saat menambahkan');
        }
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
