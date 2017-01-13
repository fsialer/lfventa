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



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	
	Route::resource('users','UsersController');
	Route::get("users/{id}/destroy",['uses'=>'UsersController@destroy',
		'as'=>'admin.users.destroy']);	
	Route::get("reset",['uses'=>'UsersController@reset',
		'as'=>'admin.reset']);
	Route::post("change",['uses'=>'UsersController@change',
		'as'=>'admin.change']);		
	//==================
	Route::resource('categories','CategoriesController');
	Route::get("categories/{id}/destroy",['uses'=>'CategoriesController@destroy',
		'as'=>'admin.categories.destroy']);
	//=================
	Route::resource('articles','ArticlesController');
	Route::get("articles/{id}/destroy",['uses'=>'ArticlesController@destroy',
		'as'=>'admin.articles.destroy']);
	//========================
	Route::resource('providers','ProvidersController');
	Route::get("providers/{id}/destroy",['uses'=>'ProvidersController@destroy',
		'as'=>'admin.providers.destroy']);
	//=====================
	Route::resource('customers','CustomersController');
	Route::get("customers/{id}/destroy",['uses'=>'CustomersController@destroy',
		'as'=>'admin.customers.destroy']);
	//==========================
	Route::resource('entries','EntriesController');
	Route::get("entries/{id}/destroy",['uses'=>'EntriesController@destroy',
		'as'=>'admin.entries.destroy']);
	//===========================
	Route::resource('sales','SalesController');
	Route::get("sales/{id}/destroy",['uses'=>'SalesController@destroy',
		'as'=>'admin.sales.destroy']);	
    //===========================
    Route::resource('reports','PdfController');
    Route::get("reports/{id}/report_article",['uses'=>'PdfController@report_article',
		'as'=>'admin.reports.report_article']);	
    Route::get("reports/{id}/report_entry",['uses'=>'PdfController@report_entry',
		'as'=>'admin.reports.report_entry']);
    Route::get("reports/{id}/report_sale",['uses'=>'PdfController@report_sale',
		'as'=>'admin.reports.report_sale']);
    Route::get("reports/{id}/report_customer",['uses'=>'PdfController@report_customer',
		'as'=>'admin.reports.report_customer']);
    Route::get("reports/{id}/report_user",['uses'=>'PdfController@report_user',
		'as'=>'admin.reports.report_user']);
	//?===================================	
	//ajax
	Route::get("sales/{id}/loadop",['uses'=>'SalesController@loadop',
		'as'=>'admin.sales.loadop']);
	Route::get('/dashboard', ['uses'=>'HomeController@index',
		'as'=>'admin.dashboard']);
    
});

Auth::routes();
Route::get('/',['uses'=>'FrontController@index','as'=>'admin.auth.login']);

