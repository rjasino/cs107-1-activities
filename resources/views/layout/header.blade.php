<header class="main-header">
    <div class="header-container">
        <div class="logo">
            <a href="{{ url('/') }}" style="text-decoration: none; color: inherit;">
                <h1>Blataditz</h1>
            </a>
        </div>
        @auth
            <div class="user-section" style="display: flex; align-items: center; gap: 1rem; color: white;">
                <p style="margin: 0;">Welcome {{ Auth::user()->name }}!</p>
                {{-- <a href="{{ route('products.index') }}">Show Products</a> --}}
                {{-- <button style="margin: 0;" onclick="location.href='{{ route('customers.index') }}'">Show Customers</button> --}}
                <a onclick="event.preventDefault(); document.querySelector('form[action=\'{{ route('auth.logout') }}\']').submit();" class="login-btn" style="cursor: pointer; margin: 0;">Logout</a>
                <form method="POST" style="display: none;" action="{{ route('auth.logout') }}">
                @csrf
                </form>
            </div>
        @else
            <nav class="header-nav">
            <a href="{{ route('login') }}" class="login-btn">Login</a>
            </nav>
        @endauth
    </div>
</header>