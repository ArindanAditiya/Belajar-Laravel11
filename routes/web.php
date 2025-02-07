<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcomeblade', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "header" => "Home Page"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "header" => "My Blog"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "header" => "About Me",
        "name" => "Arindan Aditiya"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "header" => "My Contact"
    ]);
});




