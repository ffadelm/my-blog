<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Posts",
            //"posts" => Post::all()
            //with di gunakan untuk mengambil data dari model yang lain menggunakan eager loading
            "posts" => Post::with(['author', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Blog Post",
            "post" => $post
        ]);
    }
}
