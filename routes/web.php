<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Users
Route::get('admin/users', [UserController::class, 'index']);
Route::get('admin/users/{user}', [UserController::class, 'show']);

// Posts
Route::post('admin/posts', [PostController::class, 'store']);
Route::get('admin/posts', [PostController::class, 'index']);
Route::get('admin/posts/{post}', [PostController::class, 'show']);
Route::put('admin/posts/{post}', [PostController::class, 'update']);
Route::delete('admin/posts/{post}', [PostController::class, 'destroy']);

Route::get('/csrf-token', function () {
    return ['token' => csrf_token()];
});
