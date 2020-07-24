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
    return view('welcome');
});
//--list users ---//
Route::get('/users', 'UserController@index')->name('user.list');
	// create and insert user
Route::get('users/create', 'UserController@create')->name('user.create');
Route::post('users', 'UserController@store')->name('user.store');
	// edit and update user
Route::get('users/{id}/edit', 'UserController@edit')->name('user.edit');
Route::put('users/{id}', 'UserController@update')->name('user.update');
	// delete user
Route::delete('user/{id}', 'UserController@destroy')->name('user.delete');

//--list roles ---//
Route::get('/roles', 'RoleController@index')->name('role.list');