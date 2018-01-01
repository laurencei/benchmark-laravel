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

Route::get('/', 'Controller@helloworld');
Route::get('/user/1', 'Controller@show');

// This is a "get" route to make using ab testing easier. It simulates a "post".
Route::get('/user/post', 'Controller@interact');
