<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



// Article routes


// Route::group(['middleware' =>['web']], function(){
// 	Route::get('articles', 'ArticlesController@index');
// 	Route::get('articles/create', 'ArticlesController@create');
// 	Route::get('test', 'ArticlesController@hello');
// 	Route::get('articles/{id}', 'ArticlesController@show');
// 	Route::post('articles', 'ArticlesController@store');
// 	Route::get('articles/{id}/edit', 'ArticlesController@edit');
// });

Route::get('api', function(){
	return 'hello';
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::resource('articles', 'ArticlesController');
    Route::get('/', 'WelcomeController@index');
	Route::get('contact', 'WelcomeController@contact');
	Route::get('about', 'PagesController@about');

	Route::get('foo', ['middleware' => ['manager'], function () 
	{
    	return 'This page may only be viewed by managers.';
	}]);
});
