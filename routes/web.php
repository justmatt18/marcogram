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

Auth::routes();

Route::get('/post/create', 'PostsController@create')->name('posts.create');

Route::get('/post/{post}', 'PostsController@show')->name('posts.show');

Route::post('/p', 'PostsController@store')->name('posts.store');

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');