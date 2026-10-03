<x-layout>
    <!-- ========== HERO SECTION ========== -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Side - Text -->
            <div class="col-lg-6">
                <h1 class="hero-title">
                    Log it. Share it.<br>
                    Feel the vibe.
                </h1>

                <p class="hero-text">
                    A space to express, connect, and share your moments.
                </p>

                <a href="{{ route('showRegisterPage') }}" class="btn hero-btn">
                    Create your first blog
                </a>
            </div>

            <!-- Right Side - Post Card -->
            <div class="col-lg-6">
                <div class="hero-card">
                    <div class="card-header">
                        <div class="avatar">LV</div>
                        <div>
                            <strong>LogVibe</strong>
                            <div class="time">Just now</div>
                        </div>
                    </div>

                    <p class="card-text">
                        Good vibes, real thoughts.<br>
                        This is my LogVibe.
                    </p>

                    <!-- Replace the src with your generated image -->
                    <img src="{{ asset('images/post-img.png') }}" alt="Post image" class="card-image">
                </div>
            </div>

        </div>
    </div>
</section>

<hr class="hr-about">

<section class="about-section">

    <div class="container">
        <h1 style="text-align: center">About <Span style="color: var(--soft-lavender)">LogVibe</Span></h1>
    </div>

</section>
</x-layout>