<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profileController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('profile', 'profileController');
