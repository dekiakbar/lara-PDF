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

Auth::routes();

Route::get('/',function(){
	return redirect()->route('login');
});

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

		//Route untuk data Tanda Tangan Pengesahan
		Route::resource('ttd','ttdCont')->only(['index','create','store','update','destroy']);
	});


/*
|--------------------------------------------------------------------------
|  Route Admin
|--------------------------------------------------------------------------
|
*/
	Route::group(['prefix' => 'admin','middleware'=>'role:Admin'],function(){

		//Route untuk data Tanggal surat
		Route::resource('tgl','TglCont')->only(['index','create','store','update','destroy']);
	});


/*
|--------------------------------------------------------------------------
|  Route Pegawai
|--------------------------------------------------------------------------
|
*/
	Route::group(['prefix' => 'user','middleware'=>'role:User'],function(){

		//Route untuk data Tanggal surat
		// Route::resource('tgl','TglCont')->only(['index','create','store','update','destroy']);

		//Route cetak surat
		Route::get('surat','pdfCont@tampilSurat');
		Route::post('surat/tgl','pdfCont@isiTanggal')->name('isiTgl');
		Route::post('surat/tampil/tanggal','pdfCont@Ttanggal')->name('tampiltgl');
		// Route::post('surat','pdfCont@pdf')->name('cetak');
	});