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

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/kwaleo', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/login', [
						'as' => 'login', 'uses' =>  'Front\UserController@login'
					]);*/

/* Admin Routes */
//Route::get('kwaleo', 'HomeController@index');
Route::get('kwaleo', 'Backend\AdminController@index');
//Route::get('/kwaleo/login', 'Backend\AdminController@login');
Route::get('/kwaleo/login', ['as' => 'login', 'uses' => 'Backend\AdminController@login']);
Route::get('/kwaleo/logout', 'Backend\AdminController@logout');
