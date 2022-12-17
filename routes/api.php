<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('send-mail', 'MailController@send')->name('mail');
Route::post('users/upload', 'UserController@upload');
Route::post('simpan-pinjam/upload', 'SimpanPinjamController@upload');
Route::get('simpan-pinjam/simpanan-personal', 'SimpanPinjamController@getSimpananPersonal');
Route::get('simpan-pinjam/pinjaman-personal', 'SimpanPinjamController@getPinjamanPersonal');

Route::resource('permintaan', 'PermintaanController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::get('permintaan/by-user-id', 'PermintaanController@getByUserId');
