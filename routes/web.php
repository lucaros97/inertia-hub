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

// Auth
Route::get('login')->name('login')->uses('Auth\LoginController@showLoginForm')->middleware('guest');
Route::post('login')->name('login.attempt')->uses('Auth\LoginController@login')->middleware('guest');
Route::post('logout')->name('logout')->uses('Auth\LoginController@logout');


Route::get('/')->name('dashboard')->uses('DashboardController')->middleware('auth');
Route::get('/threads')->name('threads')->uses('ThreadsController@index');
Route::get('/threads/create')->name('create_thread')->uses('ThreadsController@create');
Route::get('/threads/{channel}/{thread}')->name('showthread')->uses('ThreadsController@show');
Route::post('/threads')->name('add_thread')->uses('ThreadsController@store');
Route::get('threads/{channel}')->name('channels')->uses('ThreadsController@index');
Route::post('/threads/{channel}/{thread}/replies')->name('add_reply_to_thread')->uses('RepliesController@store');


// 500 error
Route::get('500', function () {
    echo $fail;
});
