<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcomeblade', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});




