@extends('admin.layouts.layout')
@section('main')
    <div class="container">
        <h2 class="py-5">Edit article</h2>
        <form class="py-3" action="{{ route('posts.update', $post->id) }}" method="Post">
            @csrf
            @method("PATCH")
            <div class="mb-3">
                <label for="title" class="form-label">Change title</label>
                <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp"
                       value="{{ $post->title }}">
                <div id="emailHelp" class="form-text">required, unique</div>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Change content</label>
                <textarea type="text" name="content" class="form-control" id="content">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category_id">
                    @foreach($categories as $category)
                        <option
                            {{ $category->id === $post->category_id ? 'selected': '' }} value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select class="form-select" multiple aria-label="Multiple select example" id="tags" name="tags[]">
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $postTag)
                            {{ $tag->id === $postTag->id ? 'selected': '' }}
                            @endforeach
                            value="{{ $tag->id }}">{{ $tag->title }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
