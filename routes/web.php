<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog',
        'posts' => Post::all(),
    ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('posts/{post:slug}', function (Post $post) {

    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});

Route::get('author/{user:username}', function (User $user) {

    return view('posts', [
        'title' =>  count($user->post) . ' Article Post by ' . $user->name . '',
        'posts' => $user->post,
    ]);
});

Route::get('category/{category:slug}', function (Category $category) {

    return view('posts', [
        'title' => count($category->post) . ' Article in category : ' . $category->name . '',
        'posts' => $category->post
    ]);
});
