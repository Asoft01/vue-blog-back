<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Users
Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);

// Posts
Route::resource('posts', 'Post\PostController', ['except' => ['create', 'edit']]);

// Category
Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

// Comments 
Route::resource('comments', 'Comments\CommentsController', ['except' => ['create', 'show', 'edit']]);

