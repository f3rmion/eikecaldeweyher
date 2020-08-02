<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/posts', 'PostsController@index')->name('posts.index');
	Route::get('/posts/create', 'PostsController@create')->name('posts.create');
});
