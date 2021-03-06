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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori_artikel','KategoriArtikelController');
Route::get('kategori_artikel/trash','KategoriArtikelController@trash')->name('kategori_artikel.trash');

/*Route::get('/kategori_artikel','KategoriArtikelController@index')->name('kategori_artikel.index');
Route::get('/kategori_artikel/create','KategoriArtikelController@create')->name('kategori_artikel.create');
Route::post('/kategori_artikel','KategoriArtikelController@store')->name('kategori_artikel.store');
Route::get('/kategori_artikel/{id}','KategoriArtikelController@show')->name('kategori_artikel.show');
Route::get('/kategori_artikel/{id}/edit','KategoriArtikelController@edit')->name('kategori_artikel.edit');
Route::patch('/kategori_artikel/{id}','KategoriArtikelController@update')->name('kategori_artikel.update');
Route::delete('/kategori_artikel/{id}','KategoriArtikelController@destroy')->name('kategori_artikel.destroy');*/

Route::get('/artikel','ArtikelController@index')->name('artikel.index');
Route::get('/artikel/create','ArtikelController@create')->name('artikel.create');
Route::post('/artikel','ArtikelController@store')->name('artikel.store');
Route::get('/artikel/{id}','ArtikelController@show')->name('artikel.show');
Route::get('/artikel/{id}/edit','ArtikelController@edit')->name('artikel.edit');
Route::patch('/artikel/{id}','ArtikelController@update')->name('artikel.update');

Route::resource('kategori_berita','kategoriBeritaController');

Route::get('/berita','BeritaController@index')->name('berita.index');
Route::get('/berita/create','BeritaController@create')->name('berita.create');
Route::post('/berita','BeritaController@store')->name('berita.store');
Route::get('/berita/{id}','BeritaController@show')->name('berita.show');

Route::resource('kategori_galeri','KategoriGaleriController');

Route::get('/galeri','GaleriController@index')->name('galeri.index');
Route::get('/galeri/create','GaleriController@create')->name('galeri.create');
Route::post('/galeri','GaleriController@store')->name('galeri.store');
Route::get('/galeri/{id}','GaleriController@show')->name('galeri.show');

Route::resource('kategori_pengumuman','KategoriPengumumanController');

Route::get('/pengumuman','PengumumanController@index')->name('pengumuman.index');
Route::get('/pengumuman/create','PengumumanController@create')->name('pengumuman.create');
Route::post('/pengumuman','PengumumanController@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}','PengumumanController@show')->name('pengumuman.show');

Route::get('refresh_captcha','HomeController@refreshCaptcha') ->name('refresh_captcha');