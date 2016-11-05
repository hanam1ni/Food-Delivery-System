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
    return view('browse');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', array('uses' => 'RegisterController@doRegister'));