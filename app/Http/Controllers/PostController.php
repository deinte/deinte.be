<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function index()
    {
        return view('pages.posts.index', [
            'posts' => Post::published()->get()
        ]);
    }

    public function show(Post $post): View
    {
        return view('pages.posts.show', compact('post'));
    }
}
