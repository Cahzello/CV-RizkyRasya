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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('/siswa', function () {
    return view('smkbpi.siswarpl', [
        "siswa02" => "Kasumi Toyama",
        "siswa01" => "Rizky rasya",
        "siswa03" => "Arisa Ichigaya",
        "siswa04" => "Tae Hanazono",
        "siswa05" => "Rimi Ushigome",
        "siswa06" => "Saya Yamabuki"
    ]);
});

Route::get('/siswarpl', function () {
    $arrSiswa = ["Mie Ayam", "Ayam Bakar"];

    return view('smkbpi.siswarpl')->with('siswa', $arrSiswa);
});
