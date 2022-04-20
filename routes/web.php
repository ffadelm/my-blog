<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
        "active" => "home"
    ]);
});

//closuer
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Faysal Fadel Maulana",
        "email" => "ffadelm0107@gmail.com",
        "image" => "faysal.png"
    ]);
});

//controller
Route::get('/posts', [PostController::class, 'index']);

//halaman single posts
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        "title" => "Post Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);


//tidak terpakai 

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         "title" => "Post By Category : $category->name",
//         "active" => "categories",
//         //lazy eager loading adalah cara yang digunakan untuk mengambil data dari model yang lain menggunakan eager loading
//         "posts" => $category->posts->load([
//             'author',
//             'category'
//         ]),
//     ]);
// });

// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         "title" => "Post By Author : $author->name",
//         "active" => "posts",
//         //lazy eager loading adalah cara yang digunakan untuk mengambil data dari model yang lain menggunakan eager loading
//         "posts" => $author->post->load([
//             'category',
//             'author'
//         ]),
//     ]);
// });
