<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function detail($slug){
        $post = \App\Models\Post::where('slug', $slug)->firstOrFail();
        return view('post.detail', ['post' => $post]);
    }
}
