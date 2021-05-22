<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'profileController@index')->name('profile');
// Route::get('/logout', 'LoginController@logout');

Route::resource('profile', 'profileController');
