<?php

use Illuminate\Support\Facades\Route;

/**
 * Users routes
 */

Route::middleware('auth:api')
    ->name('users.current')
    ->get('/users/me', 'UsersController@current');

Route::apiResource('users', 'UsersController');
