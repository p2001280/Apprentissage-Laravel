<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(BlogFilterRequest $request): View
    {
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

    public function show(string $slug, Post $post)
    {
        dd($post);
        $post = Post::findOrFail($post);
        if($post->slug != $slug) {
            return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id]);
        }
        return view('blog.show', [
            'post' => $post
        ]);
    }
}
