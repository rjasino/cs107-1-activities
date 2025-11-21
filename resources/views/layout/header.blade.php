<header class="header">
    <div class="header-left">
        <div class="header-logo">
            <img src="love.png" alt="Logo" class="logo-image">
        </div>
        <div class="header-brand">
            Blataditz
        </div>
    </div>
    <div class="header-right">
        @auth
            <p>Welcome {{$user->name}}</p>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="login-button">Logout</a>
            <form id="logout-form" method="POST" style="display: none;" action="{{ route('auth.logout') }}">
                @csrf
            </form>
        @else
            <a href="/login" class="login-button">Login</a>
        @endauth
    </div>
</header>
