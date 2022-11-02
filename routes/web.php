<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/', function () {
    return view('global.lp');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/LPMahasiswa', function () {
    return view('Mahasiswa.LPMahasiswa');
});

Route::get('/Kelas', function () {
    return view('Mahasiswa.kelas');
});

Route::get('/DetailKelas', function () {
    return view('Mahasiswa.detailkelas');
});

Route::get('/lp', function () {
    return view('global.lp');
});

Route::get('/main', function () {
    return view('layout.main');
});
