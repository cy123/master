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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

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

/*home*/
Route::get('/','Home\HomeController@index');
Route::get('index.html','Home\HomeController@index');
Route::get('about.html','Home\HomeController@about');
Route::get('resume.html','Home\HomeController@resume');
Route::get('game.html','Home\HomeController@game');
Route::get('detail/{id?}','Home\HomeController@detail');

/*Admin*/
Route::group(['middlewareGroups' => ['web'],'namespace'=>'Admin'], function () {
    
    Route::get('cy','IndexController@index');
    Route::get('theme','IndexController@theme');
    Route::get('resume/index','ResumeController@index');
    Route::resource('resume/add',"ResumeController@add");
    Route::resource('resume',"ResumeController");
    
    //articles
    Route::resource('articles',"ArticlesController");
    Route::post('imagesUpload','ArticlesController@imagesUpload');
    Route::resource('articleCategory',"ArticleCategoryController");
    Route::resource('tags','TagsController');

    
});
   
/*
Route::group(['middleware' => 'web'], function () {
    //Route::get('login', 'Auth\AuthController@getLogin');
    //Route::auth();

    //Route::get('/home', 'HomeController@index');
});
*/

