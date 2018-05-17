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
    return view('admin.pekerjaan.Tpekerjaan');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
|  Route Super Admin
|--------------------------------------------------------------------------
|
*/
	Route::group(['prefix' => 'superadmin','middleware'=>'role:Super Admin'],function(){

		//Route untuk data Pegawai
		Route::resource('pegawai','pegawaiCont')->only(['index','create','store','update','destroy']);

		//Route untuk data Jenis Pekerjaan
		Route::resource('pekerjaan','jenisKerjaController')->only(['index','create','store','update','destroy']);
	});