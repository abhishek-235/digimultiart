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
/*Route::get('kwaleo', 'Backend\AdminController@index');
//Route::get('/kwaleo/login', 'Backend\AdminController@login');
Route::get('/kwaleo/login', ['as' => 'login', 'uses' => 'Backend\AdminController@login']);
Route::get('/kwaleo/logout', 'Backend\AdminController@logout');*/

//Logged in users/seller cannot access or send requests these pages
Route::group(['middleware' => 'admin_auth'], function() {

Route::get('seller_login', 'Backend\LoginController@showLoginForm');
Route::post('seller_login', 'Backend\LoginController@login');

});

//Only logged in sellers can access or send requests to these pages
Route::group(['middleware' => 'seller_guest'], function(){
Route::get('seller_logout', 'Backend\LoginController@logout');
});