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

/*
|--------------------------------------------------------------------------
| Route For Dahsboard
|--------------------------------------------------------------------------
|
*/

Route::get('', 'DashboardController@index')->name('dashboard');

Route::resource('users', 'UserController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('tags', 'TagController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('positions', 'PositionController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);

Route::resource('events', 'EventController', [
    'only' => ['index', 'store', 'update', 'destroy'],
]);
