<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Github and basic Authentication Routes
Route::get('auth/github', 'Auth\AuthController@redirectToProvider');
Route::get('auth/github/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('login',function(){
    // return redirect('auth/github',301);
});


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


Route::get('detail/{teamNumber}',  'HomeController@detail');
Route::get('score',  'HomeController@score');
Route::post('score/{teamNumber}',  'HomeController@storescore');
