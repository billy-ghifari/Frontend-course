<?php

use App\Http\Controllers\C_admin;
use App\Http\Controllers\C_auth;
use App\Http\Controllers\C_Blog;
use App\Http\Controllers\C_Course;
use App\Http\Controllers\C_Kelas;
use App\Http\Controllers\C_Mentor;
use App\Http\Controllers\C_Siswa;
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


Route::controller(C_auth::class)->group(function () {
    Route::get('auth', 'index');
    Route::get('authadmin', 'authadmin');
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('loginadmin', 'loginadmin');
    Route::get('logout', 'destroy');
});


Route::get('admin', [C_admin::class, 'index']);


Route::get('/blogdetail', [C_Blog::class, 'blogdetail']);
Route::get('/blogpage', [C_Blog::class, 'index']);

Route::get('/searchview', [C_Blog::class, 'searchview']);

Route::get('/course', [C_Course::class, 'index']);
Route::get('/coursedetail', [C_Course::class, 'coursedetail']);
Route::get('/courseview', [C_Course::class, 'courseview']);

/*
<!-- ======= RA Siswa ======= --> */
Route::get('viewsiswa', [C_Siswa::class, 'index']);

/*
<!-- ======= CRUD Admin ======= --> */
Route::get('viewadmin', [C_admin::class, 'r_admin']);
Route::get('view_createadmin', [C_admin::class, 'c_admin']);
Route::get('view_updateadmin', [C_admin::class, 'u_admin']);
Route::get('view_deleteadmin', [C_admin::class, 'd_admin']);

/*
<!-- ======= CRUD Mentor ======= --> */
Route::get('viewmentor', [C_Mentor::class, 'r_mentor']);
Route::get('view_creatementor', [C_Mentor::class, 'c_mentor']);
Route::get('view_updatementor', [C_Mentor::class, 'u_mentor']);
Route::get('view_deletementor', [C_Mentor::class, 'd_mentor']);

/*
<!-- ======= CRUD Kelas ======= --> */
Route::get('view_createkelas', [C_Kelas::class, 'c_kelas']);
Route::get('view_updatekelas', [C_Kelas::class, 'u_kelas']);
Route::get('viewkelas', [C_Kelas::class, 'index']);

Route::get('detailkelas', [C_Kelas::class, 'detailkelas']);
Route::get('createkelas', [C_Kelas::class, 'createkelas']);

/*
<!-- ======= CRUD Blog ======= --> */
Route::get('view_createblog', [C_Blog::class, 'c_blog']);
Route::get('viewblog', [C_Blog::class, 'r_blog']);

Route::get('detailblog', [C_Blog::class, 'detailblog']);
