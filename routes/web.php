<?php

use App\Models\Post;

Route::get('/', function () {
    $posts = Post::all();
    return view('welcome', compact('posts'));
});

