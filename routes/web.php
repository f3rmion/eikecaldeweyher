<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::post('/posts/{post}/publish', 'PostsController@publish')->name('posts.publish');
	Route::get('/posts', 'PostsController@index')->name('posts.index');
	Route::get('/posts/create', 'PostsController@create')->name('posts.create');
	Route::post('/posts/create', 'PostsController@store')->name('posts.store');
	Route::get('/posts/{post}', 'PostsController@edit')->name('posts.edit');
	Route::post('/posts/{post}', 'PostsController@update')->name('posts.update');
});
