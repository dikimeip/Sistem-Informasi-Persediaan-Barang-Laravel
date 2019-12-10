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
	Route::get('/barang/edit/{id}','BarangController@show')->name('user.edit_barang');


});
