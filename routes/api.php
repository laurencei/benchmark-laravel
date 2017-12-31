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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/1', function () {
    return \App\User::find(1);
});

Route::get('/user/post', function () {
    $user = \App\User::create(['name' => str_random(30),
                               'email' => str_random(30).'@test.com',
                               'password' => str_random(30)]);

    return $user;
});
