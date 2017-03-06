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
    return view('front.home.index');
});

Route::group(['prefix' => 'user'], function () {
	Route::get('auth/facebook', 'Front\UserController@RedirectToProvider');
	Route::get('auth/facebook/callback', 'Front\UserController@HandleProviderCallback');
	Route::post('check-exist-user-phonenumber', 'Front\UserController@CheckExistUserPhoneNumber')->name('check-exist-user-phonenumber');
	Route::post('add-user-by-phonenumber', 'Front\UserController@AddUserByPhoneNumber')->name('add-user-by-phonenumber');
	Route::get('logout', 'Front\UserController@LogOutUser')->name('logout-user');
	Route::post('login', 'Front\UserController@LoginUser')->name('login-user');
});

Route::get('test', 'Front\UserController@CheckExistUserPhoneNumber');
Route::get('add-user-by-phonenumber', 'Front\UserController@AddUserByPhoneNumber');

Auth::routes();

Route::get('/home', 'HomeController@index');
