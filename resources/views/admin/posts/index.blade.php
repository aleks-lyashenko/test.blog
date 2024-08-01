@extends('admin.layouts.layout')

@section('main')
    <main class="container" id="content">
        <h1 class="py-3">Последние статьи</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Date/Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td><a href="{{ route('posts.show', $post->id) }}">{{$post->title}}</a></td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->created_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-5">
            {{$posts->links()}}
        </div>
    </main>
@endsection
