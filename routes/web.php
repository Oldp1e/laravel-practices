<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return ['name' => 'John Doe', 'email' => 'john@example.com'];
});
