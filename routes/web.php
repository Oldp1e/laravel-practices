<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Users
Route::get('admin/users', [UserController::class, 'index']);
Route::get('admin/users/{user}', [UserController::class, 'show']);
Route::delete('admin/users/{user}', [UserController::class, 'destroy']);

// User Profiles
Route::get('admin/user-profiles', [UserProfileController::class, 'index']);
Route::get('admin/user-profiles/{profile}', [UserProfileController::class, 'show']);
Route::post('admin/user-profiles', [UserProfileController::class, 'store']);
Route::put('admin/user-profiles/{profile}', [UserProfileController::class, 'update']);
Route::delete('admin/user-profiles/{profile}', [UserProfileController::class, 'destroy']);

// Posts
Route::post('admin/posts', [PostController::class, 'store']);
Route::get('admin/posts', [PostController::class, 'index']);
Route::get('admin/posts/{post}', [PostController::class, 'show']);
Route::put('admin/posts/{post}', [PostController::class, 'update']);
Route::delete('admin/posts/{post}', [PostController::class, 'destroy']);

Route::get('/csrf-token', function () {
    return ['token' => csrf_token()];
});
