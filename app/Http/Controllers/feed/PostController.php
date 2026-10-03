<?php

namespace App\Http\Controllers\feed;

use App\Models\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Get all posts with the user who created them
    // Newest posts first
    $posts = Post::with('user')
                ->orderBy('created_at', 'desc')
                ->get();

    return view('feed.feed', [
        'posts' => $posts
    ]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'title'   => 'required|string|max:255',
        'body'    => 'required|string|max:5000',
        'image'   => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048', // max 2MB
    ]);

    // 2. Upload the image if it exists
    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('posts', 'public');
    }

    $request->user()->posts()->create([
        'title' => $validated['title'],
        'body'  => $validated['body'],
        'image' => $imagePath
    ]);

    return redirect()->route('post.index')->with('success', 'Post created successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('feed.show', [
            'post' => Post::findOrFail($id)
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    $post = Post::findOrFail($id);

    $this->authorize('update', $post);

    return view('feed.edit', [
        'post' => $post
    ]);
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $post = Post::findOrFail($id);

    // Lock down update access
    $this->authorize('update', $post);

    // Validate inputs
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'body'  => 'required|string|max:5000',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    // Handle new image upload if present
    if ($request->hasFile('image')) {
        // Delete old image file from storage if it exists
        if ($post->image) {
            Storage::disk('public')->delete($post->image);
        }
        // Store the new image and add path to data
        $validated['image'] = $request->file('image')->store('posts', 'public');
    }

    // Update record in database
    $post->update($validated);

    return redirect()->route('post.show', $post->id)->with('success', 'Post updated successfully!');
}

// 2. Delete the post
public function destroy(string $id)
{
    $post = Post::findOrFail($id);

    // Lock down delete access
    $this->authorize('delete', $post);

    // Delete image file from storage before deleting database row
    if ($post->image) {
        Storage::disk('public')->delete($post->image);
    }

    $post->delete();

    return redirect()->route('post.index')->with('success', 'Post deleted successfully!');
}
}
