<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Curriculum;

class PostController extends Controller
{
    public function index(Curriculum $curriculum)
    {
        return view('posts/index')->with(['curriculums' => $curriculum->get()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['curriculum' => $category->get()]);
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
