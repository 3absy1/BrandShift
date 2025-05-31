@extends('main.master')
@section('title', 'Create Post')

@section('content')
<div class="container mt-4">
    <h2>Create New Post</h2>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{ old('title') }}" required>
            @error('title') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" rows="5" required>{{ old('content') }}</textarea>
            @error('content') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-success">Create</button>
        <a href="{{ route('posts') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
