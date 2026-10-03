<x-layout>
<!-- ========== LOGIN PAGE ========== -->


<div class="login-page">
    <div class="login-container">

        <!-- Left Side -->
        <div class="login-left">
            <div class="left-content">
                <h1>Log it. Share it.<br>Feel the vibe.</h1>
                <p>Welcome back to LogVibe. Continue sharing your story.</p>
            </div>
        </div>

        @if ($errors->any())
        @foreach ($errors->all() as $error )
        <div>
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        </div>
        
        @endforeach
        
        @endif
        <!-- Right Side - Form -->
        <div class="login-right">
            <div class="form-box">
                <h2>Welcome back</h2>
                <p class="form-subtitle">Please log in to your account</p>

                <form method="POST" action="{{ route('login.user') }}">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" placeholder="you@example.com" name="first_name" required>
                    </div>

                    <di class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="••••••••" required>
                    </di>

                    <div class="forgot-password">
                        <a href="/forgot-password">Forgot password?</a>
                    </div>

                    <button type="submit" class="btn-login">
                        Log In
                    </button>
                </form>

                <p class="register-link">
                    Don’t have an account? <a href="/register">Sign up</a>
                </p>
            </div>
        </div>

    </div>
</div>
</x-layout>
