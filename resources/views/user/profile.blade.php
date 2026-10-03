<x-layout>
    <!-- ========== PROFILE PAGE ========== -->
    <div class="profile-page">
        <div class="container">

            <!-- Profile Header -->
            <div class="profile-header justify-content-center">
                <div class="profile-avatar">
                    <!-- Replace with real image later -->
                    <span>JD</span>
                </div>

                <div class="profile-info">
                    <h1 class="profile-name">{{ $user->first_name }}</h1>
                    <p class="profile-email">{{ Auth::user()->email }}</p>
                    <p class="profile-bio">{{ $user->bio ?? 'No bio yet.' }}</p>

                    <div class="profile-meta">
                        <span>Joined August 2026</span>
                        <span>•</span>
                        <span>{{ $posts->count() }} posts</span>
                    </div>

                    <a href="{{ route('profile.edit', $user->id) }}" class="btn-edit-profile">
                        Edit Profile
                    </a>
                </div>
            </div>

            <!-- User Posts Section -->
            <div class="profile-posts">
                <h2 class="section-title">Posts</h2>

                <!-- Single Post Card (repeat this for each post) -->
                 @foreach( $posts as $post)
                 <div class="post-card">
                    <div class="post-header">
                        <div class="post-user">
                            <div class="post-avatar">{{ $user->first_name }} {{ $user->last_name }}</div>
                            <div>
                                <strong>{{ $user->first_name }} {{ $user->last_name }}</strong>
                                <div class="post-time">{{ $post->created_at }}</div>
                            </div>
                        </div>
                    </div>

                    <div class="post-content">
                        <p>{{ $post->content }}</p>
                    </div>

                    <!-- Optional image -->
                    <!-- <img src="..." class="post-image" alt="Post image"> -->
                </div>

                 @endforeach

                

            </div>

        </div>
    </div>
</x-layout>