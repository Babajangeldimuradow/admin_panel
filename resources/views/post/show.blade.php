@extends('layout.main')
@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<style>
    .post-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        border: 1px solid #ccc;
    }

    .post-container h1 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .post-container p {
        font-size: 18px;
        line-height: 1.6;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
    }

    .back-link:hover {
        background-color: #45a049;
    }
</style>

<div class="post-container">
    <h1>{{ $post->id }}. {{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('post.index') }}" class="back-link">Back</a>
    <form action="{{ route('post.destroy', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="back-link" style="background-color: #e74c3c;">Delete</button>
    </form>
</div>

@endsection
