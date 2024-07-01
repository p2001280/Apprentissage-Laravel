<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $validator = Validator::make([
            'title' => '',
            'content' => 'azszaszkszkszk'
        ]
        , [
          'title' => 'required|min:8',  
          'content' => 'required|min:8'  
        ]
        );

        dd($validator->validated());
        return view('blog.index', [
            'posts' => Post::paginate(1)
        ]);
    }

    public function show(string $slug, string $id)
    {
        $post = Post::findOrFail($id);
        if($post->slug != $slug) {
            return redirect()->route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return view('blog.show', [
            'post' => $post
        ]);
    }
}
