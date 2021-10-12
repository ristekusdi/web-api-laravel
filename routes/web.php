<?php

use Illuminate\Support\Facades\Route;
use Ristekusdi\WebApiLaravel\Http\Controllers\PostController;

Route::get('/web-api-laravel', [PostController::class, 'index'])->name('posts.index');