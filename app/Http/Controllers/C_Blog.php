<?php

namespace App\Http\Controllers;

use App\Constants\ApiEndPoint;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class C_Blog extends Controller
{
    private $urlApi;

    public function __construct()
    {
        $this->urlApi = env('APP_API'); // Fetch the API URL from the environment variable
    }

    public function index()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$getonekelas);
        $kelas = json_decode($response)->data;

        $response1 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginateblog);
        $blog = json_decode($response1)->data->data;


        $response2 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$categoryblog);
        $catblog = json_decode($response2)->data;

        $response3 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginatesomeblog);
        $someblog = json_decode($response3)->data->data;

        // dd($blog);
        // die;

        $someblogskip = array_slice($someblog, 2);

        // dd($kelas);
        // die;


        return view('blog/blogpage', [
            'blog' => $blog,
            'catblog' => $catblog,
            'someblog' => $someblog,
            'someblogskip' => $someblogskip,
            'kelas' => $kelas,
            'urlapi' => $this->urlApi, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
    }

    public function blogdetail()
    {
        $token = session('token');

        $response3 = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$paginatesomeblog);
        $someblog = json_decode($response3)->data->data;

        $someblogskip = array_slice($someblog, 2);

        return view('blog/blogdetail', [
            'someblog' => $someblog,
            'someblogskip' => $someblogskip,
            'urlapi' => $this->urlApi, // Assuming the data key holds the actual blog data // Assuming the pagination data is separate
        ]);
    }

    public function searchview()
    {
        return view('search');
    }

    public function r_blog()
    {
        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$allblog);
        $blog = json_decode($response)->data->data;

        // dd($blog);
        // die;

        return view('crudblog/r_blog', [
            'blogs' => $blog,
            'urlapi' => $this->urlApi
        ]);
    }

    public function c_blog()
    {

        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$catblog);
        $catblog = json_decode($response)->data->original;



        // dd(session()->all());
        // die;

        return view('crudblog/c_blog', [
            'category' => $catblog
        ]);
    }

    public function creatingblog(Request $request)
    {
        $token = session('token');

        try {

            $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$uuid . session('uuid'));
            $uuid = json_decode($response);

            $validate = Validator::make($request->all(), [
                'judul'             => 'required',
                'r_id_category'     => 'required',
                'content'           => 'required',
            ]);

            $validated = $validate->validated();
            $foto_thumbnail = fopen($request->file('foto_thumbnail'), 'r');


            $response = Http::withToken($token)
                ->attach('foto_thumbnail', $foto_thumbnail)
                ->post($this->urlApi . ApiEndPoint::$createblog, [
                    'r_id_non_siswa'    => $uuid,
                    'judul'             => $validated['judul'],
                    'r_id_category'     => $validated['r_id_category'],
                    'content'           => $validated['content']
                ]);

            // dd($validated['r_id_category']);
            // die;

            if ($response->successful()) {
                // Registration was successful
                // $responseData = $response->json();
                // dd($responseData);
                // die;
                return redirect('/viewblog')->with('success', 'Membuat blog berhasil');
            } else {
                // Registration failed, handle errors
                $responseData = $response->json();
                return back()->with('error', 'Pembuatan blog gagal: ' . $responseData['message']);
            }
        } catch (\Throwable $th) {
            // Handle exceptions, log errors, or perform other actions as needed
            dd($uuid);
            // dd($request->all());
            return back()->with('error', 'An error occurred during creating.');
        }
    }

    public function detailblog($id)
    {

        $token = session('token');

        $response = Http::withToken($token)->get($this->urlApi . ApiEndPoint::$detailblog . $id);
        $blog = json_decode($response)->classData;


        // dd($blog);
        // die;

        return view(
            'crudblog/detailblog',
            [
                'urlapi' => $this->urlApi,
                'blog' => $blog
            ]
        );
    }
}
