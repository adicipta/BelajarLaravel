<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "jusul-post-pertama",
            "author" => "Adi",
            "body" => "Ini adalah Post Pertama Adi. Dibuat di tanggal 21 Maret 2022 Oleh Adi.",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "jusul-post-kedua",
            "author" => "Cipta",
            "body" => "Ini adalah Post Kedua Cipta. Dibuat di tanggal 21 Maret 2022 Oleh Cipta.",
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
