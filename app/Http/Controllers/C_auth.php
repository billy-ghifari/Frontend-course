<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class C_auth extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        return view('auth');
    }

    public function authadmin()
    {
        return view('authadmin');
    }

    public function login(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $validated = $validator->validated();

            $response = Http::post($this->urlApi . ApiEndPoint::$login, [
                'email' => $validated['email'],
                'password' => $validated['password'],
            ]);



            $user = json_decode($response)->user->name;

            // dd($user);
            // die;

            $token = $response->json('token');



            session(['name' => $user]);
            session(['token' => $token]);
            session()->save();

            // dd($user->name);
            // die;
            return redirect('/blogpage');
        } catch (\Throwable $th) {
            $responseData = $response->json();

            dd($response);
            die;
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

    public function loginadmin(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            $validated = $validator->validated();

            $response = Http::post($this->urlApi . ApiEndPoint::$loginadmin, [
                'email' => $validated['email'],
                'password' => $validated['password'],
            ]);



            $role = json_decode($response)->data->role;


            $user = json_decode($response)->data->user->name;


            $token = json_decode($response)->data->token;

            $uuid = json_decode($response)->data->user->uuid;

            // dd($token);
            // die;


            session(['name' => $user]);
            session(['role' => $role]);
            session(['token' => $token]);
            session(['uuid' => $uuid]);
            session()->save();


            return redirect('/admin');
        } catch (\Throwable $th) {
            $responseData = $response->json();

            return back()->with('error', 'Registration failed: ' . $responseData['message']);
        }
    }

    public function register(Request $request)
    {
        try {
            $validate = Validator::make($request->all(), [
                'name'     => 'required',
                'email'    => 'required|email|unique:users',
                'password' => 'required',
            ]);

            $validated = $validate->validated();
            $photo = fopen($request->file('photo'), 'r');

            // dd($photo);
            // die;

            $response = Http::attach('photo', $photo)
                ->post($this->urlApi . '/api/register', [
                    'name' => $validated['name'],
                    'email' => $validated['email'],
                    'password' => $validated['password']
                ]);

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
            return back()->with('error', 'An error occurred during registration.');
        }
    }
}
