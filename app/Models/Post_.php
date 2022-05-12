<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facere illo officia ipsum eius amet inventore nemo doloribus voluptatem beatae accusantium, magnam minus autem a quasi enim, animi est maiores ratione corrupti aut sequi! Rem vel, aliquid reprehenderit nobis excepturi sed debitis nisi exercitationem quaerat, ad velit non harum saepe animi porro mollitia nemo inventore. Commodi aperiam enim quam mollitia error iure dicta molestias, pariatur, quidem, sapiente sint incidunt? Illum, dolorum! Ipsa aliquid nostrum ad officiis, iste pariatur ex laboriosam maiores animi, minus, laborum fugit quibusdam asperiores earum tempora praesentium. Qui enim, repudiandae corrupti aut placeat neque. Ipsum, nostrum labore!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Riski Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi facere illo officia ipsum eius amet inventore nemo doloribus voluptatem beatae accusantium, magnam minus autem a quasi enim, animi est maiores ratione corrupti aut sequi! Rem vel, aliquid reprehenderit nobis excepturi sed debitis nisi exercitationem quaerat, ad velit non harum saepe animi porro mollitia nemo inventore. Commodi aperiam enim quam mollitia error iure dicta molestias, pariatur, quidem, sapiente sint incidunt? Illum, dolorum! Ipsa aliquid nostrum ad officiis, iste pariatur ex laboriosam maiores animi, minus, laborum fugit quibusdam asperiores earum tempora praesentium. Qui enim, repudiandae corrupti aut placeat neque. Ipsum, nostrum labore!"
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
