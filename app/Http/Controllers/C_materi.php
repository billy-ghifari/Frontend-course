<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class C_materi extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
    }

    public function addmateri()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$allkelas);
        $kelas = json_decode($response)->data->data;

        // dd($kelas);
        // die;

        return view('materi.materi-add', [
            'kelas' => $kelas
        ]);
    }

    public function creatingmateri(Request $request)
    {
        $token = session('token');

        try {

            $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$uuid . session('uuid'));
            $uuid = json_decode($response);

            $validate = Validator::make($request->all(), [
                'r_id_kelas'                 => 'required',
                'judul_materi'               => 'required',
                'link_materi'                => 'required',
                'deskripsi_materi'           => 'required',
                'durasi'                     => 'required',
            ]);

            $validated = $validate->validated();


            $response = Http::withToken($token)
                ->post($this->urlApi . ApiEndPoint::$createmateri, [
                    'r_id_non_siswa'              => $uuid,
                    'r_id_kelas'                  => $validated['r_id_kelas'],
                    'judul_materi'                => $validated['judul_materi'],
                    'link_materi'                 => $validated['link_materi'],
                    'deskripsi_materi'            => $validated['deskripsi_materi'],
                    'durasi'                      => $validated['durasi'],
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
            dd($validate);
            // dd($request->all());
            return back()->with('error', 'An error occurred during creating.');
        }
    }


    public function restore($id)
    {
        $token = session('token');

        $response =  Http::withToken($token)->put($this->urlApi . ApiEndPoint::$deletemateri . $id);

        return back();

        // dd($restore);
        // die;
    }
}
