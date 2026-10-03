<x-layout>
    <style>
        .post-card {
            background-color: #1E293B;
            border: 1px solid #334155;
            border-radius: 12px;
        }

        .post-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
        }

        .btn-read-more {
            background-color: transparent;
            border: 1px solid #7C3AED;
            color: #A78BFA;
            border-radius: 8px;
            padding: 5px 14px;
            font-size: 0.85rem;
        }

        .btn-read-more:hover {
            background-color: #7C3AED;
            color: white;
            border-color: #7C3AED;
        }
    </style>

    <!-- ========== FEED PAGE ========== -->
    <section class="feed-section py-5">
        <div class="container">

            <h1 class="text-white text-center mb-4">Feed</h1>

            @forelse ($posts as $post)
                <div class="card post-card mb-4">
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="mb-0 fw-semibold text-white">
                                {{ $post->user->first_name }} {{ $post->user->last_name }}
                            </h6>
                            <small class="text-secondary">
                                {{ $post->created_at->diffForHumans() }}
                            </small>
                        </div>

                        <div class="row align-items-center">
                            <!-- Text Side -->
                            <div class="col-md-7">
                                <h5 class="text-white mb-2">{{ $post->title }}</h5>
                                <p class="text-secondary mb-3">
                                    {{ Str::limit($post->body, 150) }}
                                </p>

                                <a href="{{ route('post.show', $post->id) }}" class="btn btn-sm btn-read-more">
                                    Read more
                                </a>
                            </div>

                            <!-- Image Side -->
                            <div class="col-md-5 mt-3 mt-md-0">
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}" 
                                         alt="Post image" 
                                         class="post-image">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <p class="text-center text-secondary mt-5">No posts yet. Be the first to share something!</p>
            @endforelse

        </div>
    </section>
</x-layout>