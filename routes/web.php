<?php

use App\Models\Post;
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
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adi Cipta Pratama",
        "email" => "only.adicipta@gmail.com",
        "image" => "adi.jpg",
    ]);
});


Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "jusul-post-pertama",
            "author" => "Adi Cipta Pratama",
            "body" => "Ini adalah Post Pertama Adi Cipta Pratama. Dibuat di tanggal 21 Maret 2022 Oleh Adi Cipta Pratama",
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "jusul-post-kedua",
            "author" => "Liestiani Hasan",
            "body" => "Ini adalah Post Kedua Liestiani Hasan. Dibuat di tanggal 21 Maret 2022 Oleh Liestiani Hasan.",
        ],
    ];


    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});