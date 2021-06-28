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
Route::get('/admin', function () {
    return view('adminhome');
});
Route::get('/admin/barang', 'AdminController@tampilbarang');
Route::get('/admin/barang/barang_tambah', 'AdminController@tambahusr');
Route::get('/admin/barang/barang_edit/{id}','AdminController@editbrg');
Route::post('/admin/barang/storebrg','AdminController@storebrg');
Route::post('/admin/barang/updatebrg','AdminController@updatebrg');
Route::post('/admin/barang/hapusbrg','AdminController@hapusbrg');
Route::get('/admin/user', 'AdminController@tampiluser');
Route::get('/admin/user/user_tambah', 'AdminController@tambahusr');
Route::get('/admin/user/user_edit/{id}','AdminController@editusr');
Route::post('/admin/user/storeusr','AdminController@storeusr');
Route::post('/admin/user/updateusr','AdminController@updateusr');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('check-out', 'PesanController@check_out');
Route::delete('check-out/{id}', 'PesanController@delete');

Route::get('konfirmasi-check-out', 'PesanController@konfirmasi');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');
