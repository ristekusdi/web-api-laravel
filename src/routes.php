<?php

use Illuminate\Support\Facades\Route;

Route::get('/web-api-laravel2', 'Ristekusdi\WebApiLaravel\Http\Controllers\PostController2@index');
Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});