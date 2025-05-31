@extends('main.master')
@section('title', 'Create Post')

@section('content')
<div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h5 class="mb-0">All Posts</h5>
            <small class="text-muted">Showing {{ $posts->count() }} posts</small>
        </div>
        @can('create', App\Models\Post::class)
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="ri-add-line"></i> New Post
        </a>
        @endcan
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="ri-check-line me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="row g-4">
        @forelse ($posts as $post)
        <div class="col-md-6 col-lg-4">
            <div class="card shadow-sm h-100">
                <div class="card-body d-flex flex-column">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="card-title mb-1">{{ $post->name }}</h5>
                            @if($post->created_at->diffInDays() < 7)
                                <span class="badge bg-success-subtle text-success">New</span>
                            @endif
                        </div>
                        <small class="text-muted">Posted by {{ $post->user->name ?? 'Unknown' }}</small>
                    </div>

                    <p class="card-text flex-grow-1">{{ Str::limit($post->content, 150) }}</p>

                    <div class="mt-3">
                        <small class="text-muted d-block mb-2">
                            <i class="ri-calendar-line align-middle"></i>
                            {{ $post->created_at->format('M d, Y \a\t h:i A') }}
                        </small>

                        @if($post->updated_at->gt($post->created_at))
                            <small class="text-muted d-block mb-2">
                                <i class="ri-edit-2-line align-middle"></i>
                                Last updated {{ $post->updated_at->diffForHumans() }}
                            </small>
                        @endif
                    </div>

                    <div class="mt-auto pt-3 d-flex justify-content-between align-items-center border-top">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-primary">
                            <i class="ri-eye-line"></i> View
                        </a>

                        <div class="d-flex">
                            @can('update', $post)
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-outline-warning me-2">
                                <i class="ri-edit-line"></i>
                            </a>
                            @endcan

                            @can('delete', $post)
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger">
                                    <i class="ri-delete-bin-line"></i>
                                </button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info d-flex align-items-center">
                <i class="ri-information-line me-2"></i>
                No posts found. @can('create', App\Models\Post::class) <a href="{{ route('posts.create') }}" class="alert-link ms-1">Create one now</a>. @endcan
            </div>
        </div>
        @endforelse
    </div>

</div>

@endsection
