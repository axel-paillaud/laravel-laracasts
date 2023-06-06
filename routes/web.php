<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function($slug) {
    // Find a post by its slug and pass it to a view called "post"
    $post = Post::find($slug);

    return view('post', [
        'post' => $post,
    ]);
/*     $path = resource_path("posts/{$slug}.html");
    
    $post = cache()->remember("posts.{$slug}", 5, fn() => File::exists($path) ? File::get($path) : redirect('/'));

    return view('post', [
        'post' => $post,
    ]); */
})
->where('post', '[A-z_\-]+');