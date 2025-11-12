<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h1>Register</h1>
    
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('auth.register') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            @error('name')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        
        @if($isAdmin)
            <div>
                <label for="role_id">Role:</label>
                <select id="role_id" name="role_id" required>
                    <option value="">Select a role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}" {{ old('role_id') == $role->id ? 'selected' : '' }}>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </select>
                @error('role_id')
                    <span style="color: red;">{{ $message }}</span>
                @enderror
            </div>
        @endif

        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span style="color: red;">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">{{ $isAdmin ? 'Create User' : 'Register' }}</button>
        </div>
    </form>
    
    @if(!$isAdmin)
        <button onclick="location.href='{{ route('login') }}'">Back to Login</button>
    @endif
</div>