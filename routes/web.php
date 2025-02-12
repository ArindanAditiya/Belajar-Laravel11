<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/welcomeblade', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'header' => 'Home Page'
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'header' => 'My Blog', 
        'posts' => Post::all()
    ]); 
});

Route::get('/posts/{post:slug}', function(Post $post){
    
    return view('post', ['title'=>'SingleArticle', 'header' => 'My Blog', "post" => $post ]);
}); 

Route::get('/about', function () {
    return view('about',[
        'title' => 'About',
        'header' => 'About Me',
        'name' => 'Arindan Aditiya'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Contact',
        'header' => 'My Contact'
    ]);
});




