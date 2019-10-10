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
    return view('index');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::group(['middleware' => 'auth', 'except' => 'api'], function () {
    Route::get('feed', 'HomeController@index')->name('feed');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::group(['middleware' => 'not_self',], function () {
        Route::get('profile/{user}/follow', 'UserController@followUser')->name('user.follow');
        Route::get('profile/{user}/unfollow', 'UserController@unFollowUser')->name('user.unfollow');
    });
});
