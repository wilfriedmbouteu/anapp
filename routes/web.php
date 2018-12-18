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
Route::get('/loans', 'PagesController@loans');

Route::get('/','PagesController@index')->name('home');

Route::get('/contact','PagesController@contact');

Route::get('/newpost', 'PostController@create');

Route::get('/publish', 'PostController@create');

Route::post('/post', 'PostController@store');

Route::get('post/{post}', 'PostController@show');

Route::post('/post/{post}/comment', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::post('/register', 'RegistrationController@store');

Route::get('/logout', 'SessionsController@destroy')->name('logout');

Route::get('/profile', 'PagesController@profile')->name('profile');

Route::post('/profile', 'PagesController@uploadimg');

Route::get('/profile2', 'PagesController@profile2');

Route::get('/test', 'PagesController@test');

Route::prefix('manage')->middleware('role:superadministrator|administrator|author|editor')->group(function () {

	Route::get('/', 'ManageController@index');
	Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
	Route::resource('/users', 'UserController');
	Route::resource('/permissions', 'PermissionController');
});