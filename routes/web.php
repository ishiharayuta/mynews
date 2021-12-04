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

Route::group(['prefix' => 'admin'], function(){
    Route::get('newa/create', 'admin\NewsController@add');
});

Route::git(['prefix' => 'admin'], function(){
    Route::git('XXX', 'Admin\AAAController@bbb');
});

Route::group(['prefix' => 'admin'], function() {
    Route::git('profile/create', 'admin\ProfileController@add');
    Route::git('profile/edit', 'admin\ProfileController@edit');
});