<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show_post']);
    }

    public function index()
    {
        $posts = Post::latest()->get();

        return view ('posts.index', compact('posts'));
    }

    public function create_post()
    {
        return view ('posts.create_post');
    }

    public function save_post()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );

        return redirect()->home();
    }

    public function show_post(Post $post)
    {
        return view ('posts.show_post', compact('post'));
    }



}
