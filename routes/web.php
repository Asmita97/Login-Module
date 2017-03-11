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
Route::get('reset', function()
{
    return view('auth.reset');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);
Route::post('/handlelogin',['as'=>'handlelogin','uses'=>'AuthController@handlelogin']);
Route::get('/home',['middleware'=>'auth','as'=>'home','uses'=>'AuthController@home']);
Route::get('/logout',['as'=>'logout','uses'=>'Authcontroller@logout']);
//Route::post('/store',['as'=>'store','uses'=>'UserController@store']);
//Route::resource('users','UserController',['only'=>['create','store']]);
    Route::get('/register','RegistrationController@register');
    Route::post('/postregister','RegistrationController@postregister');
Route::get('/forgot-password','ForgotPasswordController@forgotPassword');
Route::post('/forgot-password','ForgotPasswordController@postforgotPassword');
Route::get('/reset/{email}/{resetCode}','ForgotPasswordController@resetPassword');
Route::post('/reset/{email}/{resetCode}','ForgotPasswordController@postresetPassword');
    Route::get('/activate/{email}/{activationCode}','ActivationController@activate');
});

