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
    return view('admin.dashboard');
});

Route::get('/media-cetak', function () {
    return view('admin.media-cetak');
});

Route::get('/media-online', function () {
    return view('admin.media-online');
});

Route::get('/media-sosial', function () {
    return view('admin.media-sosial');
});

