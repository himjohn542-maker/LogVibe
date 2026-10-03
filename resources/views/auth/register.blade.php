<x-layout>
    <!-- ========== REGISTER PAGE ========== -->
    <div class="register-page">
        <div class="register-container">

            <!-- Left Side -->
            <div class="register-left">
                <div class="left-content">
                    <h1>Log it. Share it.<br>Feel the vibe.</h1>
                    <p>Join LogVibe and start sharing your story with the world.</p>
                </div>
            </div>

            <!-- Right Side - Form -->
            <div class="register-right">
                <div class="form-box">
                    <h2>Create Account</h2>
                    <p class="form-subtitle">Fill in your details to get started</p>

                    <!-- Error Alerts -->
                    @if ($errors->any())
                        <div class="custom-alert">
                            @foreach ($errors->all() as $error)
                                <div class="alert-item">
                                    {{ $error }}
                                </div>
                            @endforeach
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register.user') }}">
                        @csrf

                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" placeholder="John" name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" placeholder="Doe" name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" placeholder="you@example.com" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" placeholder="••••••••" name="password" required>
                        </div>

                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" placeholder="••••••••" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn-register">
                            Create Account
                        </button>
                    </form>

                    <p class="login-link">
                        Already have an account? <a href="{{ route('showLoginPage') }}">Log in</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-layout>