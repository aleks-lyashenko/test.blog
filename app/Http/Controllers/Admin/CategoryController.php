<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $success = 'Success';
        $failure = '';
        $categories = Category::all();
        return view('admin.categories.index')->
               with(['success' => $success, 'failure' => $failure, 'categories' => $categories]);
    }

    public function create()
    {
        $postAttr = [
            'title' => '23',
        ];
        Category::create($postAttr);
        dd('created');
        return view('admin.categories.create');
    }

    public function show(Request $request)
    {
        dd(Category::find(3)->title);
        return redirect()->route('categories.index');
    }

    public function update() {
        $post = Category::find(2);
        dd($post->title);
        $post->update([

        ]);
    }

    public function delete(Request $request) {
        dd($request);
        $post = Category::find(5);
        $post->delete();
    }
}
