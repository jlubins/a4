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

Route::get('/home', 'ForumController@categoryIndex')->name('home');

Route::get('/category/{category}', 'ForumController@postIndex');
Route::get('/post/{postid}', 'ForumController@postView')->name('thread');

Route::get('/post/{postid}/reply', 'ForumController@generateForm')->name('reply');
Route::post('/post/{postid}/reply/submit', 'ForumController@postReply')->name('submit');

Route::get('/post/{postid}/edit', 'ForumController@postEdit')->name('edit');
Route::post('/post/{postid}/edit/submit', 'ForumController@submitPostEdit')->name('editSubmit');

Route::get('/post/{postid}/delete', 'ForumController@postDelete')->name('delete');
