@extends('layout.main')
@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>
    .post-list {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .post-list a {
        display: block;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 5px;
        text-decoration: none;
        color: #333;
    }

    .post-list a:hover {
        background-color: #f0f0f0;
    }

    .add-post {
        display: block;
        margin-bottom: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        text-align: center;
    }

    .add-post:hover {
        background-color: #45a049;
    }
</style>

<div class="post-list">
    <a href="{{ route('post.create') }}" class="add-post">Add one</a>
    @foreach($posts as $post)
        <div>
            <a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a>
        </div>
    @endforeach
</div>

@endsection
