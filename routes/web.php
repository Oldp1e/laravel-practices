<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route to open users view
Route::get('admin/users', [UserController::class, 'index']);

// Route get user by id
Route::get('admin/users/{user}', [UserController::class, 'show']);
