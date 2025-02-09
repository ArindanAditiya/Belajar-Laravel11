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

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Blog",
        "header" => "My Blog", 
        "posts" => [[
                "id" => 1,
                "articleTitle" => "Bahaya Judol",
                "author" => "Arindan Aditiya",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi autem odit, non facilis, hic sequi ad doloribus quia dolores ipsum voluptatibus quod tempore dolore ducimus assumenda tenetur eveniet consectetur! Voluptatum, exercitationem ipsum! Molestias numquam qui neque? Voluptates vero corporis odio quod molestiae nihil quidem officia porro est omnis nostrum aliquam ipsam, perspiciatis dolorem totam incidunt? Perferendis, impedit incidunt delectus, cupiditate inventore ratione qui sit expedita ab enim natus? Cupiditate, dignissimos excepturi quod est nobis rerum sapiente laborum nulla perferendis vel non ipsam qui fuga molestiae exercitationem? Iste quos quasi quam magni expedita quo perspiciatis maiores quis fugit est aliquid architecto blanditiis saepe vel culpa, beatae accusamus ipsa libero nostrum soluta doloribus ex."
            ],[
                "id" => 2,
                "articleTitle" => "Bahaya Buaya",
                "author" => "Ahmad kasimi",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur aliquid quos autem aperiam ratione nisi dignissimos fugiat obcaecati? Corporis magnam distinctio provident, necessitatibus error quo recusandae cumque consequatur adipisci ipsa officiis mollitia enim sed libero perspiciatis molestias dolorum ad reprehenderit, quaerat consectetur? Cumque amet est voluptates non aliquid veritatis nulla repellendus quisquam architecto ipsum quae error quis nam labore fuga tempore, ratione adipisci eligendi asperiores id, dignissimos numquam facilis? Ullam corrupti, repudiandae alias magni unde aut et natus quibusdam."
        ]]
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




