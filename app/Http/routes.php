<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index' )->name('home');

Route::get('/post/{slug}', 'PostController@show' )->name('post.show');

Route::get('/post-create', 'PostController@create' )->name('post.create');

Route::post('/post-store', 'PostController@store' )->name('post.store');

Route::get('/post-delete/{slug}', 'PostController@destroy' )->name('post.delete');

Route::get('/post-edit/{slug}', 'PostController@edit' )->name('post.edit');



