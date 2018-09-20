<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/payment', 'TransaksiController@payment');

Route::post('/login', 'API\UserController@login');

Route::get('/paket/get_all', 'API\PaketController@get_all');
Route::get('/paket/get_detail_paket', 'API\PaketController@get_detail_paket');

Route::get('/service/get_detail_category', 'API\ServiceController@get_detail_category');

Route::get('/user/get_detail', 'API\UserController@get_detail');
Route::post('/user/update_profile', 'API\UserController@update_profile');

Route::get('/transaksi/get_by_user', 'API\TransactionController@get_by_user');
Route::get('/transaksi/get_booking', 'API\TransactionController@get_booking');
Route::get('/transaksi/get_detail_transaction', 'API\TransactionController@get_detail_transaction');
Route::post('/transaksi/cancel_booking', 'API\TransactionController@cancel_booking');
Route::post('/transaksi/new_booking_package', 'API\TransactionController@new_booking_package');
Route::post('/transaksi/new_booking_service', 'API\TransactionController@new_booking_service');
Route::post('/transaksi/update_booking', 'API\TransactionController@update_booking');

Route::post('/payment_e', 'API\TransactionController@payment_e');