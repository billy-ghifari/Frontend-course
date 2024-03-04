<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

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

    public function makementor(Request $request)
    {
        $token = session('token');
        try {

            $validate = Validator::make($request->all(), [
                'name'     => 'required',
                'email'    => 'required|email|unique:users',
                'password' => 'required',
            ]);

            $validated = $validate->validated();
            $photo = fopen($request->file('photo'), 'r');

            $response = Http::withToken($token)
                ->attach('photo', $photo)
                ->post($this->urlApi . ApiEndPoint::$makementor, [
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => $validated['password'],
                ]);

            // dd($response->json());
            // die;

            if ($response->successful()) {
                // Registration was successful
                return redirect('/viewmentor')->with('success', 'Admin baru telah ditambahkan');
            } else {
                // Registration failed, handle errors
                $responseData = $response->json();

                // dd($responseData);
                return back()->with('error', 'Pembuatan gagal: ' . $responseData['message']);
            }
        } catch (\Throwable $th) {
            // Handle exceptions, log errors, or perform other actions as needed
            dd($th);
            // dd($request->all());
            return back()->with('error', 'Gagal saat menambahkan');
        }
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
