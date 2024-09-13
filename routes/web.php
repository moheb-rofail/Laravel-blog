<?php

use Illuminate\Support\Facades\Route;

// Note that the word App starts with capital A!
use App\Http\Controllers\PostsController;

Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostsController::class, 'show'])->name('posts.show');