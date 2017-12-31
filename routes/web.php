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
