<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class PostController extends BaseController
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('admin.posts.index')->with(['posts' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create')->with(['categories' => $categories, 'tags' => $tags]);
    }

    public function store(PostRequest $request)
    {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('admin.posts.show')->with(['post' => $post]);
    }

    public function edit(Post $post)
    {
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.edit')->with(['post' => $post, 'categories' => $categories, 'tags' => $tags]);
    }

    public function update(Post $post, PostRequest $request)
    {
        $data = $request->validated();

        $this->service->update($data, $post);

        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
