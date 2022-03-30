<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Faysal Fadel Maulana",
        "email" => "ffadelm0107@gmail.com",
        "image" => "faysal.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Blog Post Pertama",
            "slugh" => "blog-post-pertama",
            "author" => "Faysal Fadel Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam, blanditiis ipsa nisi praesentium, nostrum vero quidem reiciendis repudiandae impedit doloremque consequuntur. Harum repellat ipsam, debitis unde voluptas quam aliquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vitae facilis rerum itaque velit nemo, voluptatibus dolorum ratione pariatur! Perspiciatis expedita aperiam temporibus ducimus molestias facilis consequuntur officiis minus voluptates maiores dolorum architecto beatae ipsum, natus sint voluptas. Vel, tenetur. Incidunt provident laborum sapiente veritatis ex debitis ea! Quae laborum amet natus cupiditate dolorum perferendis a aspernatur, reiciendis ducimus omnis quidem, optio qui accusantium quasi consequatur rem nesciunt blanditiis. Provident autem, et aliquid itaque incidunt iusto dolor voluptates. Inventore!"
        ],
        [
            "title" => "Blog Post Kedua",
            "slugh" => "blog-post-kedua",
            "author" => "Naruto Uzumaki",
            "body" => "Naruto Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam, blanditiis ipsa nisi praesentium, nostrum vero quidem reiciendis repudiandae impedit doloremque consequuntur. Harum repellat ipsam, debitis unde voluptas quam aliquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vitae facilis rerum itaque velit nemo, voluptatibus dolorum ratione pariatur! Perspiciatis expedita aperiam temporibus ducimus molestias facilis consequuntur officiis minus voluptates maiores dolorum architecto beatae ipsum, natus sint voluptas. Vel, tenetur. Incidunt provident laborum sapiente veritatis ex debitis ea! Quae laborum amet natus cupiditate dolorum perferendis a aspernatur, reiciendis ducimus omnis quidem, optio qui accusantium quasi consequatur rem nesciunt blanditiis. Provident autem, et aliquid itaque incidunt iusto dolor voluptates. Inventore!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis non enim ullam esse rerum voluptas alias ea cum, repudiandae fugit repellat temporibus impedit quis sequi, iste velit rem odit id facere quod natus quia totam? Ipsa reiciendis rem ipsum, veniam, saepe voluptatum ab soluta in dicta consectetur quam perferendis debitis ullam. Ipsum ad ipsam veniam quae consequatur necessitatibus culpa, earum quod aspernatur? Est architecto necessitatibus tenetur. Quas, cum maxime corporis veritatis assumenda provident iste id officia commodi ipsam at nulla libero odio, error reiciendis, suscipit illo minima itaque. Placeat voluptas quo quia nemo cumque sint magni exercitationem ad repellendus fugiat molestias molestiae, eaque doloremque rem quis est. Doloremque provident earum, ex a porro assumenda iusto ipsam repudiandae, culpa hic maxime sit est alias soluta incidunt. Dicta debitis eos iste et facere magnam voluptatem nemo vero animi quasi velit fuga at iure, quia perspiciatis officiis placeat, maiores numquam molestias consequatur odio?"
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

//halaman single posts
Route::get('/posts/{slugh}', function ($slugh) {
    $blog_posts = [
        [
            "title" => "Blog Post Pertama",
            "slugh" => "blog-post-pertama",
            "author" => "Faysal Fadel Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam, blanditiis ipsa nisi praesentium, nostrum vero quidem reiciendis repudiandae impedit doloremque consequuntur. Harum repellat ipsam, debitis unde voluptas quam aliquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vitae facilis rerum itaque velit nemo, voluptatibus dolorum ratione pariatur! Perspiciatis expedita aperiam temporibus ducimus molestias facilis consequuntur officiis minus voluptates maiores dolorum architecto beatae ipsum, natus sint voluptas. Vel, tenetur. Incidunt provident laborum sapiente veritatis ex debitis ea! Quae laborum amet natus cupiditate dolorum perferendis a aspernatur, reiciendis ducimus omnis quidem, optio qui accusantium quasi consequatur rem nesciunt blanditiis. Provident autem, et aliquid itaque incidunt iusto dolor voluptates. Inventore!"
        ],
        [
            "title" => "Blog Post Kedua",
            "slugh" => "blog-post-kedua",
            "author" => "Naruto Uzumaki",
            "body" => "Naruto Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti aperiam, blanditiis ipsa nisi praesentium, nostrum vero quidem reiciendis repudiandae impedit doloremque consequuntur. Harum repellat ipsam, debitis unde voluptas quam aliquam. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet sequi vitae facilis rerum itaque velit nemo, voluptatibus dolorum ratione pariatur! Perspiciatis expedita aperiam temporibus ducimus molestias facilis consequuntur officiis minus voluptates maiores dolorum architecto beatae ipsum, natus sint voluptas. Vel, tenetur. Incidunt provident laborum sapiente veritatis ex debitis ea! Quae laborum amet natus cupiditate dolorum perferendis a aspernatur, reiciendis ducimus omnis quidem, optio qui accusantium quasi consequatur rem nesciunt blanditiis. Provident autem, et aliquid itaque incidunt iusto dolor voluptates. Inventore!. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis non enim ullam esse rerum voluptas alias ea cum, repudiandae fugit repellat temporibus impedit quis sequi, iste velit rem odit id facere quod natus quia totam? Ipsa reiciendis rem ipsum, veniam, saepe voluptatum ab soluta in dicta consectetur quam perferendis debitis ullam. Ipsum ad ipsam veniam quae consequatur necessitatibus culpa, earum quod aspernatur? Est architecto necessitatibus tenetur. Quas, cum maxime corporis veritatis assumenda provident iste id officia commodi ipsam at nulla libero odio, error reiciendis, suscipit illo minima itaque. Placeat voluptas quo quia nemo cumque sint magni exercitationem ad repellendus fugiat molestias molestiae, eaque doloremque rem quis est. Doloremque provident earum, ex a porro assumenda iusto ipsam repudiandae, culpa hic maxime sit est alias soluta incidunt. Dicta debitis eos iste et facere magnam voluptatem nemo vero animi quasi velit fuga at iure, quia perspiciatis officiis placeat, maiores numquam molestias consequatur odio?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slugh'] == $slugh) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Blog Post",
        "post" => $new_post
    ]);
});
