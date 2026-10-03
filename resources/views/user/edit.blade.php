  <x-layout>
    <!-- ========== EDIT PROFILE PAGE ========== -->
    <div class="edit-profile-page">
        <div class="container">
            <div class="edit-box">

                <h1 class="page-title">Edit Profile</h1>
                <p class="page-subtitle">Update your personal information</p>

                    <form method="POST" action="{{ route('profile.update', $user->id) }}">

                    @csrf
                    @method('PUT')

                    <!-- Name Fields -->
                    <div class="form-row">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name', $user->first_name ?? '') }}" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name', $user->last_name ?? '') }}" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
                    </div>

                    <!-- Bio -->
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" maxlength="1000" rows="4">{{ old('bio', $user->bio ?? '') }}</textarea>
                        <small>Max 1000 characters</small>
                    </div>

                    <!-- Buttons -->
                    <div class="form-actions">
                        <button type="submit" class="btn-save">
                            Save Changes
                        </button>
                        <a href="{{ route('profile.index') }}" class="btn-cancel">
                            Cancel
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>

</x-layout>