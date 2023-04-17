<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_post = [
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
    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
