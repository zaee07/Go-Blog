<?php

namespace App\Models;

use Illuminate\Support\Arr;
// use PhpParser\Node\Expr\Cast\Array_;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    public static function all() {
        // view('blog');
        return [
                [
                    'id' => 1,
                    'slug' => 'judul-1',
                    'title' => 'judul 1',
                    'author' => 'i',
                    'body' => 'lorem ipsum door sit amet'
                ],
                [
                    'id' => 2,
                    'slug' => 'judul-2',
                    'title' => 'judul 2',
                    'author' => 'i',
                    'body' => 'lorem ipsum door sit amet'
                ]
        ];
    }

    public static function find($slug): array {
        $post = Arr::first(static::all(), fn($post)=> $post['slug'] === $slug);
        return (!$post) ? abort(404) : $post;
    }   

}
