<?php

use App\Http\Controllers\C_admin;
use App\Http\Controllers\C_auth;
use App\Http\Controllers\C_Blog;
use App\Http\Controllers\C_Course;
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

Route::get('login', [C_auth::class, 'index']);


Route::get('loginadmin', [C_auth::class, 'loginadmin']);
Route::get('admin', [C_admin::class, 'admin']);

Route::get('/courseview', [C_Course::class, 'courseview']);
Route::get('/blogdetail', [C_Blog::class, 'blogdetail']);
Route::get('/blogpage', [C_Blog::class, 'index']);
Route::get('/searchview', [C_Blog::class, 'searchview']);
