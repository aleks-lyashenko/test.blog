@extends('admin.layouts.layout')
@section('main')
    <div class="container">
        <h2 class="py-5">{{ $post->title }}</h2>
        <p>
            <a href="{{ $post->content }}">{{ $post->title }}</a>
        </p>

        <div class="">

        </div>

        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-secondary">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-outline-secondary">
            </form>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">Back</a>
        </div>

    </div>
@endsection
