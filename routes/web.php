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

// Route::get('/', function () {
//     return view('welcome');
// });
 

Route::get('/','LoginController@index')->name('login');
Route::post('/login','LoginController@post_login')->name('do_login') ;
Route::get('/logout','UserController@logout')->name('logout');


Route::group(['middleware'=>'auth'],function(){
	Route::get('/user','UserController@index')->name('user.index') ;
	Route::get('/barang','BarangController@index')->name('user.barang');
	Route::get('/barang/tambah','BarangController@create')->name('user.barang_tambah');
	Route::post('/barang/tambah','BarangController@store')->name('user.do_barang_tambah');
	Route::get('/barang/edit/{id}','BarangController@edit')->name('user.edit_barang');
	Route::post('/barang/edit/{id}','BarangController@update')->name('user.do_edit_barang');
	Route::get('/barang/delete/{id}','BarangController@destroy')->name('user.delete_barang');
	Route::get('/barang/show/{id}','BarangController@show')->name('user.show_barang');
	Route::post('/barang/cari','BarangController@search')->name('user.cari_barang');
	Route::get('/suplier','SuplierController@index')->name('user.suplier') ;
	Route::get('/suplier/tambah','SuplierController@create')->name('user.tambah_suplier') ;
	Route::post('/suplier/do_tambah','SuplierController@store')->name('user.do_tambah_suplier') ;
	Route::get('/suplier/edit/{id}','SuplierController@edit')->name('user.editsuplier');
	Route::post('/suplier/edit/{id}','SuplierController@update')->name('user.do_edit_suplier');
	Route::get('/suplier/delete/{id}','SuplierController@destroy')->name('user.hapussuplier');
	Route::get('/pelanggan','PelangganController@index')->name('user.pelanggan') ;
	Route::get('/pelanggan/tambah','PelangganController@create')->name('user.tambahpelanggan');
	Route::get('/pelanggan/edit/{id}','PelangganController@edit')->name('user.editpelanggan');
	Route::get('/pelanggan/delete/{id}','PelangganController@destroy')->name('user.deletepelanggan');
	Route::post('/pelanggan/do_tambah','PelangganController@store')->name('user.do_tambahpelanggan');
	Route::post('/pelanggan/edit/{id}','PelangganController@update')->name('user.do_edit_pelanggan');
	Route::get('/masuk','MasukController@index')->name('user.masuk') ;
	Route::get('/masuk/tambah','MasukController@create')->name('user.tambah_masuk') ;
	Route::post('/masuk/do_tambah','MasukController@store')->name('user.do_tambah_masuk') ;
	Route::get('/masuk/show/{id}','MasukController@show')->name('user.show_masuk');
	Route::get('/masuk/delete/{id}','MasukController@destroy')->name('user.hapusmasuk');
	Route::get('/keluar','KeluarController@index')->name('user.keluar') ;
	Route::get('/keluar/tambah','KeluarController@create')->name('user.tambahkeluar');
	Route::post('/keluar/do_tambah','KeluarController@store')->name('user.do_masuk') ;
	Route::get('/keluar/show/{id}','KeluarController@show')->name('user.show_keluar');
	Route::get('/keluar/delete/{id}','KeluarController@destroy')->name('user.delete_keluar');
});
