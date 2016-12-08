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

Route::get('/', [
	'uses' => 'HomeController@getIndex',
	'as' => 'Home'
	]);

Route::get('/profile/', [
	'uses' => 'ProfileController@getIndex',
	'as' => 'profile'
	]);

// Route::get('/jobs/{name?}-{d?}-{e?}', [
// 	'uses'=>'JobsController@getIndex',
// 	'as'=>'chirag'
// 	]);

Route::get('/employer/', [
	'uses' => 'EmployerController@getIndex',
	'as' => 'employer'
	]);

Route::get('/employer_dashboard/', [
	'uses' => 'EmployerDashboardController@getIndex',
	'as' => 'eDashboard'
	]);

Route::post('/getresult', [
	'uses' => 'SearchController@getValues',
	'as' => 'getresult'
	]);

Route::get('/search',[
    'uses' => 'SearchController@getSearch',
    'as' => 'search'
]);


Route::get('/job/search/{skill?}/{location?}/{exp?}', [
	'uses'=>'SearchController@getSearch',
	'as'=>'jobsearch'
	]);

Route::get('/job/', [
	'uses'=>'SearchController@getIndex',
	'as'=>'jobindex'
	]);


Route::post('/getcities',[
	'uses' => 'CityController@getCities',
	'as' => 'cities'
	]);

Route::post('/getstates',[
	'uses' => 'CityController@getStates',
	'as' => 'state'
	]);

Route::post('/addcity',[
	'uses' => 'CityController@addCity',
	'as' => 'addcity'
	]);

Route::get('get',[
	'uses' => 'demoTwoController@getIndex',
	'as' => 'get'
	]);

Route::post('/sidebar',[
	'uses' => 'JobsController@getSearch',
	'as' => 'sidebar'
	]);