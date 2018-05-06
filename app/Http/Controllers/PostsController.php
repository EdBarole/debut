<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $posts = Post::all();

        return view('console.posts.index')->with('posts', $posts);
    }

    public function create()
    {
        return view('console.posts.add');
    }
}
