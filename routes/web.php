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

	Route::resource('/transaksi', 'TransaksiController');

	Route::resource('/history_topup', 'HistoryTopupController');

	Route::resource('/user', 'UserController');
	Route::get('/user/activated/{id}/{status}', 'UserController@activated_account');
	Route::get('/user/destroy/{id}', 'UserController@destroy');
	Route::get('/user/show/{id}', 'UserController@show');

	Route::get('/service', 'ServiceController@index');
	Route::get('/service/destroy/{id}', 'ServiceController@destroy');
	Route::get('/service/show', 'ServiceController@show');
	Route::post('/service/update', 'ServiceController@update');
	Route::get('/service/new', 'ServiceController@new');
	Route::post('service/input', 'ServiceController@input');
});