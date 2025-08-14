<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route to open users view
Route::get('admin/users', [UserController::class, 'index']);

// Route get user by id
Route::get('admin/users/{user}', [UserController::class, 'show']);

// Route to insert a new post in database
Route::post('admin/posts', [PostController::class, 'store']);

Route::get('/csrf-token', function () {
    return ['token' => csrf_token()];
});
