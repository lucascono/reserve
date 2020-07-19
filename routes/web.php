<?php

use Illuminate\Support\Facades\Route;

/**
 * Web routes
 */

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/home', 'HomeController@index')->name('home');
