<x-layout>
    <style>
        .single-post-card {
            background-color: #1E293B;
            border: 1px solid #334155;
            border-radius: 12px;
        }
        .single-post-image {
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
        }
        .btn-edit {
            background-color: transparent;
            border: 1px solid #3B82F6;
            color: #60A5FA;
        }
        .btn-edit:hover {
            background-color: #3B82F6;
            color: white;
        }
    </style>

    <section class="py-5">
        <div class="container" style="max-width: 800px;">
            <!-- Back Button -->
            <a href="{{ route('post.index') }}" class="btn btn-sm btn-outline-secondary mb-4">&larr; Back to Feed</a>

            <div class="card single-post-card">
                <div class="card-body p-4">
                    <!-- Author & Date -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6 class="mb-0 fw-semibold text-white">
                            {{ $post->user->first_name }} {{ $post->user->last_name }}
                        </h6>
                        <small class="text-secondary">
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </div>

                    <!-- Title -->
                    <h2 class="text-white mb-3">{{ $post->title }}</h2>

                    <!-- Image (Only if uploaded) -->
                    @if ($post->image)
                        <div class="mb-4">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="single-post-image">
                        </div>
                    @endif

                    <!-- Full Body Text -->
                    <p class="text-secondary fs-5 mb-4" style="white-space: pre-line;">{{ $post->body }}</p>

                    <!-- Edit & Delete Buttons (Protected by Policy) -->
                    @can('update', $post)
                        <div class="d-flex gap-2 pt-3 border-top border-secondary">
                            <a href="{{ route('post.edit', $post->id) }}" class="btn btn-sm btn-edit">Edit Post</a>

                            <form action="{{ route('post.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete Post</button>
                            </form>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </section>
</x-layout>