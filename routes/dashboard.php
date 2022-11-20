<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Route Outside resource
|--------------------------------------------------------------------------
|
*/

Route::get('/events/image', 'EventController@getImages');
Route::post('/events/{event}/image', 'EventController@storeImage');
Route::delete('/events/{event}/image', 'EventController@deleteImage');

Route::get('users/teachers', 'UserController@teachers')->name('users.teachers');
Route::get('users/roles', 'UserController@roles')->name('users.roles');
Route::get('user', 'UserController@user')->name('users.user');
Route::get('all-user', 'UserController@users');
Route::patch('user/profile', 'UserController@updateProfile');
Route::post('users/upload', 'UserController@upload');

Route::get('/laporans/internal', 'LaporanController@getInternal');
Route::get('/laporans/eksternal', 'LaporanController@getEksternal');

Route::post('simpan-pinjam/upload', 'SimpanPinjamController@upload');
Route::get('simpan-pinjam/simpanan-personal', 'SimpanPinjamController@getSimpananPersonal');
Route::get('simpan-pinjam/pinjaman-personal', 'SimpanPinjamController@getPinjamanPersonal');

Route::get('permintaan/by-user-id', 'PermintaanController@getByUserId');

/*
|--------------------------------------------------------------------------
| Route For Dahsboard
|--------------------------------------------------------------------------
|
*/

Route::get('', 'DashboardController@index')->name('dashboard');

Route::get('divisis/by-unit', 'DivisiController@getByUnit');

Route::resource('users', 'UserController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('tags', 'TagController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('images', 'ImageController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('videos', 'VideoController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('positions', 'PositionController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('jabatan-kbn', 'JabatanKbnController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('jabatan-koperasi', 'JabatanKoperasiController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('events', 'EventController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('banners', 'BannerController', [
    'only' => ['index', 'update'],
]);

Route::resource('artikels', 'ArtikelController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('faqs', 'FaqController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('laporans', 'LaporanController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('penghargaans', 'PenghargaanController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('kalenders', 'KalenderController', [
    'only' => ['index', 'update']
]);

Route::resource('divisis', 'DivisiController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('units', 'UnitController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('jenis-pengajuan', 'JenisPengajuanController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('simpan-pinjam', 'SimpanPinjamController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('permintaan', 'PermintaanController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);
