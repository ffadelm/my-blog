<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



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

//closuer
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Faysal Fadel Maulana",
        "email" => "ffadelm0107@gmail.com",
        "image" => "faysal.png"
    ]);
});

//controller
Route::get('/posts', [PostController::class, 'index']);

//halaman single posts
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
