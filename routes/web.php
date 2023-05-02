<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Jason Oktavian",
        "email" => "jasonoktavian30@gmail.com",
        "image" => "MHA.png",
        "title" => "About"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category', 'user'),
    ]);
});

Route::get('authors/{user}', function (User $user) {
    return view('posts', [
        'title' => "Post by : $user->name",
        'posts' => $user->posts->load('category', 'user'),
    ]);
});
