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
    return view('home');
});

Route::get('/gagal', function () {
    return 'gagal...';
});

Route::get('/coba', function () {
    return 'Berhasil...!';
})->middleware('check');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'jadwalController@index');
Route::get('/tanggal', 'tanggalController@index');
Route::get('/cari' ,'cariController@index');
Route::post('/pengajuan' ,'jadwalController@pengajuankegiatan');

Route::get('/tambahuser' ,'tambahuserController@index');
Route::post('/tambahuserproses' ,'tambahuserController@tambahuser');

Route::get('/kegiatan' ,'kegiatanController@index');

Route::get('/listuser','HomeController@listuserindex');

Route::get('/hapususer/{id}','HomeController@hapususer');

