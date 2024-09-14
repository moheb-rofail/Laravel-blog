<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index() {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store() {
        $post = new Post();
        $post->title = request()->title;
        $post->body = request()->body;
        $post->user_id = Auth::user()->id;
        $post->save();

        return to_route('posts.index');
    }
}
