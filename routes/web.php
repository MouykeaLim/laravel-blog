<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/user/{id}', function ($id) {
//     return "user ID :" . $id;
// })->where('id', '[0-9]+');
// Route::get('/user/name/{name}', function ($name = "guest") {
//     return "Hello" . $name;
// });
// Route::get('profile', function () {
//     return "User Profile";
// })->name('profile');

// Import the UserController
use App\Http\Controllers\UserController;
Route::get('/user/{id}', [UserController::class, 'show']);

// import the PostController
use App\Http\Controllers\PostController;
// Route::resource('posts', PostController::class);

Route::get('/posts',[PostController::class,'index'])->name('posts.index'); // Display all posts
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create'); // Show form to create a new post
Route::post('/posts',[PostController::class,'store'])->name('posts.store'); // Store a new post
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show'); // Display a specific post
Route::get('/posts/{id}/edit',[PostController::class,'edit'])->name('posts.edit'); // Show form to edit a post
Route::put('/posts/{id}',[PostController::class,'update'])->name('posts.update'); // Update a specific post
Route::delete('/posts/{id}',[PostController::class,'destroy'])->name('posts.destroy'); // Delete a specific post
