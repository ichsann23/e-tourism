<?php

use App\Http\Controllers\FrontPageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/penginapan', [FrontPageController::class, 'penginapan'])->name('penginapan');
Route::get('/penginapan/{id}', [FrontPageController::class, 'penginapanDetail'])->name('penginapan.detail');

Route::get('/transportasi', function () {
    return view('/user/transportasi/transportasi');
});


Route::get('/detail-transportasi', function () {
    return view('/user/transportasi/detail-transportasi');
});

Route::get('/blog', function () {
    return view('/user/blog/blog');
});
Route::get('/blogDetail', function () {
    return view('/user/blog/detailBlog');
});


// Route::get('/admin/dataPenginapan', [PenginapanController::class, 'show']);
// Route::get('/admin/tambahPenginapan', [PenginapanController::class, 'create']);
// Route::post('/admin', [PenginapanController::class, 'store']);

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::get('/', function () {
        return view('admin/index');
    });
    
    Route::get('/tambahPenginapan', function () {
        return view('admin/penginapan/tambahPenginapan');
    });
    
    Route::get('/dataTransportasi', function () {
        return view('/admin/transportasi/dataTransportasi');
    });

    Route::get('/tambahTransportasi', function () {
        return view('/admin/transportasi/tambahTransportasi');
    });

    Route::get('/edit-penginapan', function () {
        return view('/admin/penginapan/editPenginapan');
    });

    Route::group(['prefix' => 'penginapan'], function(){

        Route::get('/', [PenginapanController::class, 'index'])->name('admin.penginapan');
        Route::get('/tambah-data', [PenginapanController::class, 'create'])->name('admin.penginapan.tambah');
        Route::post('/tambah-data', [PenginapanController::class, 'store'])->name('admin.penginapan.tambah.submit');
        Route::get('/edit-data/{id}', [PenginapanController::class, 'edit'])->name('admin.penginapan.edit');
        Route::put('/edit-data/{id}', [PenginapanController::class, 'update'])->name('admin.penginapan.update');
        Route::delete('/{id}', [PenginapanController::class, 'destroy'])->name('admin.penginapan.hapus');
    });

    Route::group(['prefix' => 'user'], function(){

        Route::get('/', [UserController::class, 'index'])->name('admin.user');
        Route::get('/tambah-data', [UserController::class, 'create'])->name('admin.user.tambah');
        Route::post('/tambah-data', [UserController::class, 'store'])->name('admin.user.tambah.submit');
        Route::get('/edit-data/{id}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/edit-data/{id}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('admin.user.hapus');
    });
    
    Route::get('/login', function () {
        return view('/admin/users/login');
    });

});
Route::get('/home', function(){
    return view('admin/index');
})->name('home')->middleware('auth');
