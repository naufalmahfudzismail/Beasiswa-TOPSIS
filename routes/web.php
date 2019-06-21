<?php

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
    return view('register');
});

Auth::routes();

Route::get('/profil', 'profilController@index')->name('admin/profil');
Route::resource('peserta','PesertaController');
Route::get('/', 'DashboardController@index');

Route::get('/registrasi', 'PesertaController@registrasi');
Route::get('/seleksi', 'SeleksiController@index');
Route::get('/dashboard', 'DashboardController@index');

Route::post('/registrasiPeserta', 'PesertaController@registrasi');
Route::post('image-view','PesertaController@storeImage');
Route::get('/prosesSeleksi', 'SeleksiController@prosesSeleksi');
