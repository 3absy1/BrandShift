<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        $user = Auth::user();
        return view('sections.posts.index', compact('posts', 'user'));
    }

    public function create()
    {
        return view('sections.posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $validated['user_id'] = Auth::id();

        Post::create($validated);

        return redirect()->route('posts')->with('success', 'Post created successfully.');
    }

    public function show(Post $post)
    {
        return view('sections.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $this->authorize('update', $post); // Optional: if using policies
        return view('sections.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($validated);

        return redirect()->route('posts')->with('success', 'Post updated successfully.');
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post); // Optional
        $post->delete();

        return redirect()->route('posts')->with('success', 'Post deleted successfully.');
    }
}
