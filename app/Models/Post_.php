<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-pertama",
            "author" => "Wahyu Kurniawan Hartanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, voluptatibus."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-kedua",
            "author" => "Wahyu Awan Kurniawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, voluptatibus."
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
