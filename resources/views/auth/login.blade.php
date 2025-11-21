<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blataditz</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js', 
            'resources/css/main.css', 'resources/css/navigation.css',
            'resources/css/auth.css',])
        @endif
</head>
<body>
    <div class="login-wrapper">
        <!-- Login Content -->
        <div class="login-container">
            <div class="login-box">
                <div class="login-header">
                    <div class="login-brand">Blataditz</div>
                    <h1>Welcome Back</h1>
                    <p class="login-subtitle">Sign in to your account to continue</p>
                </div>

                @if ($errors->any())
                    <div class="error-messages">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('auth.login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div>
                        <button type="submit" class="btn-login">Login</button>
                    </div>
                </form>

                <div class="divider">
                    <span>OR</span>
                </div>

                <button class="btn-register" onclick="location.href='{{ route('register') }}'">Create New Account</button>

                <div class="back-home">
                    <a href="{{ url('/') }}">← Back to Home</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>