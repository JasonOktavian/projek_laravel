<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Diary Of A Wimpy Kid",
            "slug" => "diary-of-a-wimpy-kid",
            "author" => "Jason Oktavian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem deserunt nostrum consequatur incidunt! Debitis soluta veritatis at totam! Veniam dolores alias sint possimus ex velit error in voluptate a quia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore et est praesentium sequi eos vel quas iusto eius eligendi placeat fugit, deserunt quae delectus perferendis cumque vitae facere nisi ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam labore atque fuga. Ipsum rerum veniam possimus esse at et modi maxime, quam tenetur aliquam inventore nostrum vel dolorum aut necessitatibus."
        ],
        [
            "title" => "Marvel End Game",
            "slug" => "marvel-end-game",
            "author" => "Jason Oktavian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem deserunt nostrum consequatur incidunt! Debitis soluta veritatis at totam! Veniam dolores alias sint possimus ex velit error in voluptate a quia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore et est praesentium sequi eos vel quas iusto eius eligendi placeat fugit, deserunt quae delectus perferendis cumque vitae facere nisi ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam labore atque fuga. Ipsum rerum veniam possimus esse at et modi maxime, quam tenetur aliquam inventore nostrum vel dolorum aut necessitatibus."
        ],
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Diary Of A Wimpy Kid",
            "slug" => "diary-of-a-wimpy-kid",
            "author" => "Jason Oktavian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem deserunt nostrum consequatur incidunt! Debitis soluta veritatis at totam! Veniam dolores alias sint possimus ex velit error in voluptate a quia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore et est praesentium sequi eos vel quas iusto eius eligendi placeat fugit, deserunt quae delectus perferendis cumque vitae facere nisi ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam labore atque fuga. Ipsum rerum veniam possimus esse at et modi maxime, quam tenetur aliquam inventore nostrum vel dolorum aut necessitatibus."
        ],
        [
            "title" => "Marvel End Game",
            "slug" => "marvel-end-game",
            "author" => "Jason Oktavian",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem deserunt nostrum consequatur incidunt! Debitis soluta veritatis at totam! Veniam dolores alias sint possimus ex velit error in voluptate a quia?Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore et est praesentium sequi eos vel quas iusto eius eligendi placeat fugit, deserunt quae delectus perferendis cumque vitae facere nisi ipsam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam labore atque fuga. Ipsum rerum veniam possimus esse at et modi maxime, quam tenetur aliquam inventore nostrum vel dolorum aut necessitatibus."
        ],
    ];
    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post

    ]);
});
