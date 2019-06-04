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


Route::middleware([])->group(function () {
	Route::get ('/', ['uses'=>'IndexController@execute', 'as'=>'index']);
	Route::get('/artison/{id}', ['uses'=>'ArtisonController@execute', 'as'=>'artison']);
	Route::get('/contact', ['uses'=>'ContactController@execute', 'as'=>'contact']);
	Auth::routes(['verify' => true]);
});

Route::middleware('auth', 'verified')->group(function () {
	Route::get('/home', ['uses'=>'HomeController@index', 'us'=>'home']);
	Route::post('/contact', ['uses'=>'ContactController@execute', 'as'=>'contact']);
});

Route::middleware('auth', 'verified', 'admin')->group(function () {
	Route::group(['prefix'=>'admin'], function(){
		Route::get('/', ['uses'=>'AdminController@execute', 'as'=>'admin']);
		Route::group(['prefix'=>'news'], function(){
			Route::get('/', ['uses'=>'AdminNewsController@execute', 'as'=>'adminnews']);
			Route::match(['get','post'],'/add', ['uses'=>'AdminNewsAddController@execute', 'as'=>'adminnewsadd']);
			Route::match(['get','post','delete'],'/edit/{id}', ['uses'=>'AdminNewsEditController@execute', 'as'=>'adminnewsedit']);
		});
	});
});