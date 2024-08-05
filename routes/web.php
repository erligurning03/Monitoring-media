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

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/media-online', function () {
    return view('admin.media-online');
});
Route::get('/tambah-media-online', function () {
    return view('admin.tambah-media-online');
});

Route::get('/media-cetak', function () {
    return view('admin.media-cetak');
});
Route::get('/tambah-media-cetak', function () {
    return view('admin.tambah-media-cetak');
});

Route::get('/media-sosial', function () {
    return view('admin.media-sosial');
});

Route::get('/manajemen-user', function () {
    return view('admin.manajemen-user');
});


Route::get('/handle', function () {
    return view('admin.handle-user');
});

