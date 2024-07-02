<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Http\Requests\CreatePostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{

    public function create() {
        return view('blog.create');
    }

    public function store(CreatePostRequest $request) {
        $post = Post::create($request->validated());
        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])->with('success', 'L\'article a bien été sauvegardé');
        // dd($request->all());
    }

    public function index(BlogFilterRequest $request): View
    {
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

    public function show(string $slug, Post $post): RedirectResponse | View
    {
        if($post->slug != $slug) {
            return redirect()->route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return view('blog.show', [
            'post' => $post
        ]);
    }
}
