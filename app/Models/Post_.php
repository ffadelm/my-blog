<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Blog Post Pertama",
            "slugh" => "blog-post-pertama",
            "author" => "Faysal Fadel Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam, blanditiis ipsa nisi praesentium, nostrum vero quidem reiciendis repudiandae impedit doloremque consequuntur. Harum repellat ipsam, debitis unde voluptas quam aliquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vitae facilis rerum itaque velit nemo, voluptatibus dolorum ratione pariatur! Perspiciatis expedita aperiam temporibus ducimus molestias facilis consequuntur officiis minus voluptates maiores dolorum architecto beatae ipsum, natus sint voluptas. Vel, tenetur. Incidunt provident laborum sapiente veritatis ex debitis ea! Quae laborum amet natus cupiditate dolorum perferendis a aspernatur, reiciendis ducimus omnis quidem, optio qui accusantium quasi consequatur rem nesciunt blanditiis. Provident autem, et aliquid itaque incidunt iusto dolor voluptates. Inventore!"
        ],
        [
            "title" => "Blog Post Kedua",
            "slugh" => "blog-post-kedua",
            "author" => "Naruto Uzumaki Uchiha",
            "body" => "Naruto Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam, blanditiis ipsa nisi praesentium, nostrum vero quidem reiciendis repudiandae impedit doloremque consequuntur. Harum repellat ipsam, debitis unde voluptas quam aliquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vitae facilis rerum itaque velit nemo, voluptatibus dolorum ratione pariatur! Perspiciatis expedita aperiam temporibus ducimus molestias facilis consequuntur officiis minus voluptates maiores dolorum architecto beatae ipsum, natus sint voluptas. Vel, tenetur. Incidunt provident laborum sapiente veritatis ex debitis ea! Quae laborum amet natus cupiditate dolorum perferendis a aspernatur, reiciendis ducimus omnis quidem, optio qui accusantium quasi consequatur rem nesciunt blanditiis. Provident autem, et aliquid itaque incidunt iusto dolor voluptates. Inventore!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis non enim ullam esse rerum voluptas alias ea cum, repudiandae fugit repellat temporibus impedit quis sequi, iste velit rem odit id facere quod natus quia totam? Ipsa reiciendis rem ipsum, veniam, saepe voluptatum ab soluta in dicta consectetur quam perferendis debitis ullam. Ipsum ad ipsam veniam quae consequatur necessitatibus culpa, earum quod aspernatur? Est architecto necessitatibus tenetur. Quas, cum maxime corporis veritatis assumenda provident iste id officia commodi ipsam at nulla libero odio, error reiciendis, suscipit illo minima itaque. Placeat voluptas quo quia nemo cumque sint magni exercitationem ad repellendus fugiat molestias molestiae, eaque doloremque rem quis est. Doloremque provident earum, ex a porro assumenda iusto ipsam repudiandae, culpa hic maxime sit est alias soluta incidunt. Dicta debitis eos iste et facere magnam voluptatem nemo vero animi quasi velit fuga at iure, quia perspiciatis officiis placeat, maiores numquam molestias consequatur odio?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slugh)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slugh'] == $slugh) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstwhere('slugh', $slugh);
    }
}
