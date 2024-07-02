<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Http\Requests\FormPostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{

    public function create() {
        $post = new Post();
        $post->title = 'Bonjour';
        return view('blog.create', [
            'post' => $post
        ]);
    }

    public function store(FormPostRequest $request) {
        $posts = Post::create($request->validated());
        dd($posts);
        foreach($posts as $post) {
            $category = $post->category->name;
        }
        return redirect()
        ->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])
        ->with('success', 'L\'article a bien été sauvegardé');
    }

    public function index(): View
    {
        $data = Post::has('tags', '>=', 1)->get();
        // $post->tags()->createMany([[
        //     'name' => 'Tag 1'
        // ], [
        //     'name' => 'Tag 2'
        // ]
        // ]);
        $category = Category::find(1);
        $category->posts()->where('id', '>', '10')->get();
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

    public function edit(Post $post) {
        return view('blog.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post, FormPostRequest $request) {
        $post->update($request->validated());
        return redirect()->route('blog.show', ['slug' => $post->slug, 'post' => $post->id])->with('success', 'L\'article a bien été modifié');
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
