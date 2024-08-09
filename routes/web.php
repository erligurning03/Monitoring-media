<?php

use App\Http\Controllers\MediaCetakController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaOnlineController;
use App\Http\Controllers\RegisterationController;

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

// Route::get('/media-online', function () {
//     return view('admin.media-online');
// });
// Route::get('/tambah-media-online', function () {
//     return view('admin.tambah-media-online');
// });

//route media online
Route::get('/media-online',[MediaOnlineController::class, 'index']);
Route::post('/media-online',[MediaOnlineController::class, 'store']);
Route::get('/tambah-media-online',[MediaOnlineController::class, 'create']);
Route::post('/tambah-media-online',[MediaOnlineController::class, 'store']);
Route::get('/edit-media-online/{id}/edit',[MediaOnlineController::class, 'edit']);//
Route::put('/media-online/{id}',[MediaOnlineController::class, 'update']);//
//put untuk update data
Route::delete('media-online/{id}', [MediaOnlineController::class, 'destroy']);

//route media cetak
// Route::get('/media-cetak', function () {
//     return view('admin.media-cetak');
// });
Route::get('/media-cetak',[MediaCetakController::class, 'index']);
Route::post('/media-cetak',[MediaCetakController::class, 'store']);
Route::get('/tambah-media-cetak',[MediaCetakController::class, 'create']);
Route::post('/tambah-media-cetak',[MediaCetakController::class, 'store']);
Route::get('/edit-media-cetak/{id}/edit',[MediaCetakController::class, 'edit']);//
Route::put('/media-cetak/{id}',[MediaCetakController::class, 'update']);//
Route::delete('media-cetak/{id}', [MediaCetakController::class, 'destroy']);

// Route::get('/tambah-media-cetak', function () {
//     return view('admin.tambah-media-cetak');

// });

// Route::get('/media-sosial', function () {
//     return view('admin.media-sosial');
// });

// Route::get('/tambah-media-online', function () {
//     return view('admin.tambah-media-online');
// });
// Route::get('/tambah-media-sosial', function () {
//     return view('admin.tambah-media-sosial');
// });
Route::get('/edit-media-cetak', function () {
    return view('admin.edit-media-cetak');
});


//route media sosial
Route::get('/edit-media-sosial', function () {
    return view('admin.edit-media-sosial');
});

// Route::get('/edit-media-online', function () {
//     return view('admin.edit-media-online');
// });

Route::get('/media-sosial', function () {
    return view('admin.media-sosial');
});


//route manajemen user
Route::get('/manajemen-user', function () {
    return view('admin.manajemen-user');
});


Route::get('/handle', function () {
    return view('admin.handle-user');
});



Route::get('register', [RegisterationController::class, 'create'])->name('register');


