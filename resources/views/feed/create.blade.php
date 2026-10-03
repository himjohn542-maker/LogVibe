<x-layout>
  <style>
        .create-post-page {
            min-height: 100vh;
            background-color: #0F172A;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .create-box {
            width: 100%;
            max-width: 580px;
            background-color: #1E293B;
            border: 1px solid #334155;
            border-radius: 12px;
            padding: 32px;
        }

        .create-box h1 {
            font-size: 1.5rem;
            color: #F8FAFC;
            margin-bottom: 6px;
        }

        .subtitle {
            color: #94A3B8;
            font-size: 0.95rem;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #E2E8F0;
            font-size: 0.9rem;
            margin-bottom: 6px;
            font-weight: 500;
        }

        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="file"] {
            width: 100%;
            padding: 12px 14px;
            background-color: #0F172A;
            border: 1px solid #334155;
            border-radius: 8px;
            color: #F8FAFC;
            font-size: 0.95rem;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #7C3AED;
        }

        .form-group textarea {
            resize: vertical;
        }

        .btn-submit {
            width: 100%;
            background-color: #7C3AED;
            color: white;
            border: none;
            padding: 13px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #6D28D9;
        }
    </style>


    <div class="create-post-page">
        <div class="create-box">

            <h1>Create New Post</h1>
            <p class="subtitle">Share your thoughts with LogVibe</p>

            <div class="container">
              <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                @csrf

                <!-- Title -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="Enter post title" required>
                </div>

                <!-- Body (Content) -->
                <div class="form-group">
                    <label for="body">Content</label>
                    <textarea name="body" id="body" rows="6" placeholder="Write your post..." required>{{ old('body') }}</textarea>
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label for="image">Image (optional)</label>
                    <input type="file" name="image" id="image" accept="image/*">
                </div>

                <button type="submit" class="btn-submit">
                    Publish Post
                </button>
            </form>
            </div>

        </div>
    </div>
</x-layout>