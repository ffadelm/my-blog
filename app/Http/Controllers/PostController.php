<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function show($slugh)
    {
        return view('post', [
            "title" => "Blog Post",
            "post" => Post::find($slugh)
        ]);
    }
}
