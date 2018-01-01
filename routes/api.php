<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'Controller@helloworld');
Route::get('/user/1', 'Controller@show');

// This is a "get" route to make using ab testing easier. It simulates a "post".
Route::get('/user/post', 'Controller@interact');
