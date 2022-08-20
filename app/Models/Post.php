<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Daniel ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit quaerat maiores corporis tempore voluptatibus vel, amet animi nesciunt autem quia libero? Natus dolore facilis, animi saepe error repellendus ratione ea quisquam esse delectus alias beatae! Molestias fugit facilis alias perspiciatis minima numquam modi quisquam eaque et ipsam quae corrupti excepturi libero dolore consequatur cupiditate, veritatis eum, amet suscipit magni sit! A earum alias fugit molestias, molestiae eos inventore quisquam incidunt, quae voluptatibus ab unde veniam ipsum iure? Nobis, possimus commodi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jack",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia nulla blanditiis vitae accusamus ducimus pariatur minus rem nisi illum itaque suscipit, fugiat, laudantium veritatis voluptatem sint explicabo quae placeat debitis odio quo dolores ut ea quisquam aut! Et similique, officia saepe corporis libero maiores ipsam cupiditate adipisci nemo. Voluptas dignissimos eveniet, nemo nostrum libero exercitationem, maiores quas, atque voluptatum a iure dolore. Dolorem animi culpa nisi neque nam. Atque, dolorem, dolorum modi ratione cumque porro asperiores incidunt delectus nesciunt dolores error, eligendi impedit ullam aliquam optio a dolor ut minus eum! Eos corporis, autem cumque sequi totam officia earum quas!"
        ],
    ];

    public static function all() {

        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return$posts->firstWhere('slug', $slug);
    }
}
