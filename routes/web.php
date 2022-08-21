<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenginapanController;

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
    return view('/user/index');
});

Route::get('/virtual-tour', function () {
    return view('/user/virtual/virtual-tour');
});

Route::get('/detail-penginapan', function () {
    return view('/user/penginapan/detail-penginapan');
});

Route::get('/penginapan', function () {
    return view('/user/penginapan/penginapan');
});

Route::get('/transportasi', function () {
    return view('/user/transportasi/transportasi');
});


Route::get('/detail-transportasi', function () {
    return view('/user/transportasi/detail-transportasi');
});

Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/admin/tambahPenginapan', function () {
    return view('admin/penginapan/tambahPenginapan');
});

Route::get('/admin/editPenginapan', function () {
    return view('/admin/penginapan/editPenginapan');
});
Route::get('/admin/dataTransportasi', function () {
    return view('/admin/transportasi/dataTransportasi');
});
Route::get('/admin/dataPenginapan', function () {
    return view('/admin/penginapan/dataPenginapan');
});
Route::get('/admin/tambahTransportasi', function () {
    return view('/admin/transportasi/tambahTransportasi');
});

Route::get('/admin/login', function () {
    return view('/admin/users/login');
});


// Route::get('/admin/dataPenginapan', [PenginapanController::class, 'show']);
// Route::get('/admin/tambahPenginapan', [PenginapanController::class, 'create']);
// Route::post('/admin', [PenginapanController::class, 'store']);
