<?php

<<<<<<< HEAD
use App\Http\Controllers\C_auth;
=======
use App\Http\Controllers\C_Blog;
>>>>>>> e6cec7522aa2611610b5554888433ceb189e5fdd
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

<<<<<<< HEAD
Route::get('login', [C_auth::class, 'index']);
=======
Route::get('/blogpage', [C_Blog::class, 'index']);
>>>>>>> e6cec7522aa2611610b5554888433ceb189e5fdd
