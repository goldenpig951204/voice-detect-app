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
    return view('home');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function() {
    Route::namespace('Admin')->prefix('admin')->group(function() {
        Route::resource('dashboard', 'DashboardController');
        Route::resource('users', 'UsersController');
        Route::post("users/get-users", "UsersController@get_users");
        Route::resource('profile', 'ProfileController');
    });
    Route::resource('/owner', 'OwnerController');
});