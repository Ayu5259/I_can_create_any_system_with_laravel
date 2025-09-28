<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('posts.index');
});

Route::get('/posts/create', function () {
    return view('posts.create');
});
