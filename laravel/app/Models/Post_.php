<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =  [
        [
        "title" => "Judul Post Pertama",
        "slug" => "Judul-post-pertama",
        "autor" => "Zaki AUliya Azhari",
        "Body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus blanditiis iure nostrum assumenda dolores laborum veritatis dolorum eum 
        ea officia, incidunt unde earum, ducimus doloremque odio atque vero, expedita dolorem? Ipsum labore fuga cumque rem et excepturi nihil numquam 
        repudiandae quaerat fugiat ipsa culpa earum ea aperiam praesentium itaque id aliquid veritatis, dolorem ipsam dolorum, facilis suscipit animi? 
        Facilis obcaecati distinctio dolor beatae qui illo expedita sunt ducimus dicta rem maxime, molestias nesciunt esse, sint, laborum nisi exercitationem quae magnam."
    ],

    [
        "title" => "Judul Post Zaki",
        "slug" => "Judul-post-kedua",
        "autor" => "Mahameru Wicaksono",
        "Body" => "
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur officiis
        ut totam repellat inventore quas voluptates et rerum minus error hic dolore,
        iste id voluptatum rem aut. Amet autem neque veritatis nihil explicabo 
        perferendis aut officiis necessitatibus? At dolor architecto nemo consectetur, 
        repellendus sunt suscipit voluptatibus deserunt molestias fuga voluptate perferendis 
        similique laudantium. Tempora, quidem omnis. Non quasi perspiciatis repellat sint architecto.
        Nam minus possimus placeat. Illum impedit soluta distinctio voluptates obcaecati doloribus quos 
        nemo fugiat sunt voluptatem esse magni a iure aut autem hic cum vero veniam, nisi magnam
        corporis nesciunt necessitatibus pariatur beatae! Asperiores voluptates facilis excepturi sed."
    ]
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
