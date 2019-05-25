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
    return view('shared.index');
});

Route::resource('kasir','KasirController');
Route::resource('admin','AdminController');
Route::resource('kategori','KategoriController');
Route::get('showkat','KategoriController@showKat')->name('showkat');
Route::resource('barang','BarangController');
Route::get('showbrg','BarangController@showBrg')->name('showbrg');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
