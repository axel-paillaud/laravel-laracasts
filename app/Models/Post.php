<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post
{
    public static function all()
    {
        $files = File::files(resource_path('posts/'));

/*         return array_map(function ($files) {
            return $files->getContents();
        }, $files); */

        return array_map(fn ($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");

        if (!File::exists($path)) {
            throw new ModelNotFoundException();
        }
        
        return cache()->remember("posts.{$slug}", 1200, fn() => File::get($path));
    }
}
