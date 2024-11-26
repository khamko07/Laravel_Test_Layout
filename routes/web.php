<?php

use Illuminate\Support\Facades\Route;



Route::fallback(function () {
    return view('error');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/category', function () {
    return view('category');
});

Route::get('/about', function () {
    return view('about');
});




