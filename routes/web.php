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

Route::get('/', 'Front\HomeController@Index');

Route::group(['prefix' => 'user'], function () {
	Route::get('auth/facebook', 'Front\UserController@RedirectToProvider');
	Route::get('auth/facebook/callback', 'Front\UserController@HandleProviderCallback');
	Route::post('check-exist-user-phonenumber', 'Front\UserController@CheckExistUserPhoneNumber')->name('check-exist-user-phonenumber');
	Route::post('add-user-by-phonenumber', 'Front\UserController@AddUserByPhoneNumber')->name('add-user-by-phonenumber');
	Route::get('logout', 'Front\UserController@LogOutUser')->name('logout-user');
	Route::post('login', 'Front\UserController@LoginUser')->name('login-user');
	Route::get('check-login', 'Front\UserController@CheckLogin');
	Route::get('like-product', 'Front\UserController@LikeProduct');
});

Route::group(['prefix' => 'collection'], function () {
	Route::get('all', 'Front\CollectionController@GetCollections');
});
Route::group(['prefix' => 'product'], function () {
	Route::get('newest-product', 'Front\ProductController@GetNewestProducts');
	Route::get('mostlike-product', 'Front\ProductController@GetMostLikeProducts');
	Route::get('discount-product', 'Front\ProductController@GetDiscountProducts');
	Route::get('tendency-product', 'Front\ProductController@GetTendencyProducts');
	Route::get('detail-product-info', 'Front\ProductController@GetDetailProductInfo');
});

Auth::routes();

Route::get('/s_p', 'Front\SearchPageController@index')->name('s_p');
