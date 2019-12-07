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
Route::get('/firstpage', function(){
	return view('index');
});

Route::get('/kategori', function(){
	return view('kategori');
});
Route::get('/dashboard', 'DashboardController@index');
Route::get('/halamantambah', 'DashboardController@index');
Route::resource('/tes', 'TesController');
Route::get('/kategori', 'KategoriController@index')->name('kategori.index');
Route::get('/produk', 'ProdukController@index');
Route::resource('/article', 'ArticleController');