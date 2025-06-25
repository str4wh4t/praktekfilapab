<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $featured_post = Post::first();
        $post_list = Post::where('published', true)->with('categories')->get();
        return view('home.index', compact('featured_post', 'post_list'));
    }    
}
