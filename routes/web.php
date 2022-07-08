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

// route basic
Route::get('about', function () {
    return  view('Hallo About');
});

Route::get('profile', function () {
    $nama = "Adrian";
    $umur = "18";
    $alamat = "Bandung";
    $bendera = "Jerman";
    $hobi = "Tidur";
    return view('pages/profile' , compact('nama','umur','alamat','bendera','hobi'));
});

// route parameter
Route::get('biodata/{nama}' , function ($a) {
    return view('pages/biodata' , compact('a'));
}) ;

Route::get('makan/{makan}/{minum}/{harga}' , function ($makan,$minum,$harga) {
    return view('pages/makan' , compact('makan','minum','harga'));
}) ;

// route optional parameter
Route::get('pesan/{nama?}' , function ($a = "null") {
    return view('pages/pesan' , compact('a'));
}) ;