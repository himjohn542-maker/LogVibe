<x-layout>
    <section class="py-5">
        <div class="container" style="max-width: 600px;">
            <h2 class="text-white mb-4">Edit Post</h2>

            <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Title Input -->
                <div class="mb-3">
                    <label class="form-label text-white">Title</label>
                    <input type="text" name="title" class="form-control bg-dark text-white border-secondary" value="{{ old('title', $post->title) }}" required>
                </div>

                <!-- Body Input -->
                <div class="mb-3">
                    <label class="form-label text-white">Body</label>
                    <textarea name="body" rows="5" class="form-control bg-dark text-white border-secondary" required>{{ old('body', $post->body) }}</textarea>
                </div>

                <!-- Current Image Preview (If exists) -->
                @if($post->image)
                    <div class="mb-3">
                        <label class="form-label text-white d-block">Current Image</label>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="Current Image" style="max-width: 150px;" class="rounded mb-2">
                    </div>
                @endif

                <!-- Upload New Image -->
                <div class="mb-4">
                    <label class="form-label text-white">Replace Image (Optional)</label>
                    <input type="file" name="image" class="form-control bg-dark text-white border-secondary">
                </div>

                <button type="submit" class="btn btn-primary">Update Post</button>
                <a href="{{ route('post.show', $post->id) }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </section>
</x-layout>