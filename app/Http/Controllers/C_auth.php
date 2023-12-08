<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class C_auth extends Controller
{
    public function index()
    {
        return view('auth');
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $validated = $validator->validated();

            $response = Http::post('http://127.0.0.1:1234/api/login', [
                'email' => $validated['email'],
                'password' => $validated['password'],
            ]);

            $user = json_decode($response)->user->name;
            // dd($user);
            // die;
            // $response->json('content');
            $token = $response->json('token');

            session(['name' => $user]);
            session(['token' => $token]);
            session()->save();

            return redirect('/blogpage');
        } catch (\Throwable $th) {
            $responseData = $response->json();

            return back()->with('error', 'Registration failed: ' . $responseData['message']);
        }
    }


    public function destroy(Request $request)
    {
        try {
            $request->session()->flush();
            return redirect('/auth')->with('success', 'log out.');
        } catch (\Throwable $th) {
            // Ha"ndle exceptions, log errors, or perform other actions as needed
            dd($th);
        }
    }

    public function register(Request $request)
    {
        try {
            // $file               = request('file');
            // $file_path          = $request->photo->path();
            // $file_mime          = $file->getMimeType('image');
            // $file_uploaded_name = $file->getClientOriginalName();

            $validate = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]);

            $validated = $validate->validated();

            $response = Http::attach('images', $request->file('images'))
                ->asForm()
                ->post('http://127.0.0.1:1234/api/register', [
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => $validated['password']
                ]);


            // $response = Http::post('http://127.0.0.1:1234/api/register', [

            //     'multipart' => [
            //         'name' => 'images',
            //         'contents' => fopen('photo.jpg', 'r')
            //     ],
            //     [
            //         'name' => 'name',
            //         'content' => $validated['name']
            //     ],
            //     [
            //         'name' => 'email',
            //         'content' => $validated['email'],
            //     ],
            //     [
            //         'name' => 'password',
            //         'password' => $validated['password'],
            //     ]

            // ]);

            if ($response->successful()) {
                // Registration was successful
                return redirect('/auth')->with('success', 'Registration successful. Please log in.');
            } else {
                // Registration failed, handle errors
                $responseData = $response->json();
                return back()->with('error', 'Registration failed: ' . $responseData['message']);
            }
        } catch (\Throwable $th) {
            // Handle exceptions, log errors, or perform other actions as needed
            dd($th);
            // dd($request->all());
            die;
            return back()->with('error', 'An error occurred during registration.');
        }
    }

    public function loginadmin()
    {
        return view('authadmin');
    }
}
