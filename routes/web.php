<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/research', 'ResearchController@index')->name('research.index');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
	Route::get('/home', 'HomeController@index')->name('home');
	Route::post('/posts/{post}/publish', 'PostsController@publish')->name('posts.publish');
	Route::post('/posts/{post}/delete', 'PostsController@delete')->name('posts.delete');
	Route::get('/posts', 'PostsController@index')->name('posts.index');
	Route::get('/posts/create', 'PostsController@create')->name('posts.create');
	Route::post('/posts/create', 'PostsController@store')->name('posts.store');
	Route::get('/posts/{post}', 'PostsController@edit')->name('posts.edit');
	Route::post('/posts/{post}', 'PostsController@update')->name('posts.update');

	Route::get('/categories', 'CategoriesController@index')->name('categories.index');
	Route::get('/categories/create', 'CategoriesController@create')->name('categories.create');
	Route::post('/categories/{category}/delete', 'CategoriesController@delete')->name('categories.delete');
	Route::post('/categories/create', 'CategoriesController@store')->name('categories.store');
	Route::get('/categories/{category}', 'CategoriesController@edit')->name('categories.edit');
	Route::post('/categories/{category}', 'CategoriesController@update')->name('categories.update');

	Route::get('/tags', 'TagsController@index')->name('tags.index');
	Route::get('/tags/create', 'TagsController@create')->name('tags.create');
	Route::post('/tags/{tag}/delete', 'TagsController@delete')->name('tags.delete');
	Route::post('/tags/create', 'TagsController@store')->name('tags.store');
	Route::get('/tags/{tag}', 'TagsController@edit')->name('tags.edit');
	Route::post('/tags/{tag}', 'TagsController@update')->name('tags.update');
});
