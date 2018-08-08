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
    return view('auth.login');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function()
{
	Route::get('/home', 'HomeController@index')->name('home');

	Route::resource('/pelanggan', 'PelangganController');
	Route::post('/pelanggan/update', 'PelangganController@update');

	Route::resource('/transaksi', 'TransaksiController');
	Route::get('/transaksi/destroy/{id}', 'TransaksiController@destroy');
	Route::get('/transaksi/edit/{id}', 'TransaksiController@edit');
	Route::get('/transaksi/detail/{id}', 'TransaksiController@detail');
	Route::get('/transaksi/delete/paket/{pesanan}/{paket}', 'TransaksiController@delete_paket');
	Route::get('/transaksi/delete/service/{pesanan}/{service}', 'TransaksiController@delete_service');
	Route::post('/transaksi/update', 'TransaksiController@update');

	Route::get('/topup', 'HistoryTopupController@index');
	Route::get('/topup/new', 'HistoryTopupController@new');
	Route::post('/topup/input', 'HistoryTopupController@input');

	Route::resource('/user', 'UserController');
	Route::get('/user/activated/{id}/{status}', 'UserController@activated_account');
	Route::get('/user/destroy/{id}', 'UserController@destroy');
	Route::get('/user/show/{id}', 'UserController@show');

	Route::get('/service', 'ServiceController@index');
	Route::get('/service/destroy/{id}', 'ServiceController@destroy');
	Route::get('/service/show', 'ServiceController@show');
	Route::post('/service/update', 'ServiceController@update');
	Route::get('/service/new', 'ServiceController@new');
	Route::post('/service/input', 'ServiceController@input');

	Route::get('/paket', 'PaketController@index');
	Route::get('/paket/list_paket', 'PaketController@list_paket');
	Route::get('/paket/new', 'PaketController@new');
	Route::post('/paket/input', 'PaketController@input');
	Route::get('/paket/destroy/{id}', 'PaketController@destroy');

	Route::get('/detail_paket/get_service/{id}', 'DetailPaketController@get_service');

	Route::get('/diskon', 'DiskonController@index');
	Route::get('/diskon/new', 'DiskonController@new');
	Route::post('/diskon/input', 'DiskonController@input');
	Route::get('/diskon/destroy/{id}', 'DiskonController@destroy');

	Route::get('/ruangan', 'RuanganController@index');
	Route::get('/ruangan/new', 'RuanganController@new');
	Route::post('/ruangan/input', 'RuanganController@input');
	Route::get('/ruangan/destroy/{id}', 'RuanganController@destroy');
	Route::get('/ruangan/status/{id}/{status}', 'RuanganController@change_status');

	Route::get('/therapist', 'TherapistController@index');
	Route::get('/therapist/new', 'TherapistController@new');
	Route::post('/therapist/input', 'TherapistController@input');
	Route::get('/therapist/destroy/{id}', 'TherapistController@destroy');
});
	Route::get('/therapist/get_all', 'TherapistController@get_all');
	Route::get('/ruangan/get_all', 'RuanganController@get_all');
	Route::get('/service/get_all', 'ServiceController@get_all');
	Route::post('/payment', 'TransaksiController@payment');