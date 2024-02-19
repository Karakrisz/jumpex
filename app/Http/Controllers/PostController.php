<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;

// use TCG\Voyager\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all();

        // $posts = Post::with('category')->get();
        $posts = Post::with('category')->latest()->take(3)->get();

        return view('welcome', compact('posts'));
    }

    public function show($lang = 'hu', Post $post)
    {
        app()->setLocale($lang);
        $currentLanguage = app()->getLocale();
    
        return view('posts.show', compact('post', 'currentLanguage'));
    }

    public function jsonPosts()
    {
        $posts = Post::with('category')->latest()->take(3)->get();
        return response()->json($posts);
    }

}