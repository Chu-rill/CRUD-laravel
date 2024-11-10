<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/addNote', function () {
    return view('addNote');
})->name('addNote');
Route::get('/home', function () {
    $posts = Post::all();
    return view('home', ['posts' => $posts]);
});

///user routes
Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//post routes

Route::post('/create-post', [PostController::class, 'createPost']);
