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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@index')->name('post.index')->middleware('auth');
Route::get('/post/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::post('/post/create', 'PostController@store')->name('post.store')->middleware('auth');
Route::get('/post/{post}', 'PostController@show')->name('post.show')->middleware('auth');
Route::get('/post/{post}/edit', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::patch('/post/{post}/edit', 'PostController@update')->name('post.update')->middleware('auth');
Route::delete('/post/{post}/delete', 'PostController@destroy')->name('post.destroy')->middleware('auth');
Route::post('/post/{post}/comment', 'PostCommentController@store')->name('post.comment.store')->middleware('auth');
