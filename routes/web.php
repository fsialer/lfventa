<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'],function(){
	Route::resource('users','UsersController');
	Route::get("users/{id}/destroy",['uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy']);
});

Route::group(['prefix'=>'admin'],function(){
	Route::resource('categories','CategoriesController');
	Route::get("categories/{id}/destroy",['uses'=>'CategoriesController@destroy',
		'as'=>'admin.categories.destroy']);
});
Route::group(['prefix'=>'admin'],function(){
	Route::resource('articles','ArticlesController');
	Route::get("articles/{id}/destroy",['uses'=>'ArticlesController@destroy',
		'as'=>'admin.articles.destroy']);
});

Route::group(['prefix'=>'admin'],function(){
	Route::resource('providers','ProvidersController');
	Route::get("providers/{id}/destroy",['uses'=>'ProvidersController@destroy',
		'as'=>'admin.providers.destroy']);
});
