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

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/create', 'PostsController@create')->name('create-post');
Route::post('/posts', 'PostsController@store')->name('post.store');

Route::get('/posts/{id}', 'PostsController@show')->name('single-post');
Route::post('/posts/{id}/comments', 'CommentController@store')->name('comment-post');

Route::get('/register', 'RegisterController@create')->name('register.create');
Route::post('/register', 'RegisterController@store')->name('register.store');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/login', 'LoginController@create')->name('login');
Route::post('/login', 'LoginController@store')->name('login.store');
Route::get('/users/{id}', 'UsersController@show')->name('users.show');
Route::get('/posts/tag/{tag}', 'TagsController@index')->name('tags.index');



