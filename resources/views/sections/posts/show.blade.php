@extends('main.master')
@section('title', 'View Post')

@section('content')
<div class="container mt-4">
    <h2>{{ $post->title }}</h2>

    <p><strong>Author:</strong> {{ $post->user->name }}</p>
    <p><strong>Created at:</strong> {{ $post->created_at->format('d M Y, h:i A') }}</p>

    <div class="mt-3">
        <p>{{ $post->content }}</p>
    </div>

    <a href="{{ route('posts') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
