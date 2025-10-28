<?php

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
    return view('welcome');
});

Route::get('/profile/{Nafiah}', function ($Nafiah) {
    return view('profile', ['Nafiah' => $Nafiah]);
});


Route::get('/produk/{kategori}/{id}', function ($kategori, $id) {
    return view('produk', [
        'kategori' => $kategori,
        'id' => $id
    ]);
});

Route::get('/tiket/{tempat}/{harga}', function ($tempat, $harga) {
        $tempat_bersih = ucwords(str_replace('_', ' ', $tempat));
       $harga_terformat = 'Rp ' . number_format($harga, 0, ',', '.');
      return view('tiket', [
        'tempat' => $tempat_bersih,
        'harga' => $harga_terformat,
    ]);
});

Route::get('/', function () {
    return view('home'); 
});

