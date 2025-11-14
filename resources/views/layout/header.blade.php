<header class="bg-black border-b border-gray-800 sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('dashboard') }}" class="flex items-center space-x-2">
                    <span class="text-2xl font-bold">
                        {{-- <span class="text-red-500">EX</span> --}}
                        <span class="text-white">Blataditz</span>
                    </span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ url('/new-arrivals') }}" class="text-gray-300 hover:text-white transition duration-200">New Arrivals</a>
                <a href="{{ url('/hot-picks') }}" class="text-gray-300 hover:text-white transition duration-200">Hot Picks</a>
                <a href="{{ url('/consoles') }}" class="text-gray-300 hover:text-white transition duration-200">Consoles</a>
                <a href="{{ url('/accessories') }}" class="text-gray-300 hover:text-white transition duration-200">Accessories</a>
                <a href="{{ url('/pc-parts') }}" class="text-gray-300 hover:text-white transition duration-200">PC Parts</a>
            </div>

            <!-- Right Side Icons -->
            <div class="flex items-center space-x-4">
                <!-- Search Icon -->
                <button class="text-gray-300 hover:text-white transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>

                <!-- Cart Icon -->
                <a href="{{ url('/cart') }}" class="text-gray-300 hover:text-white transition relative">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-4 w-4 flex items-center justify-center">0</span>
                </a>

                <!-- User Icon -->
                @auth
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-white transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </button>
                        <!-- Dropdown -->
                        <div class="absolute right-0 mt-2 w-48 bg-gray-900 border border-gray-700 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200">
                            <div class="px-4 py-3 border-b border-gray-700">
                                <p class="text-sm text-gray-400">Signed in as</p>
                                <p class="text-sm font-medium text-white truncate">{{ Auth::user()->name }}</p>
                            </div>
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-white">Dashboard</a>
                            <a href="{{ route('customers.index') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-800 hover:text-white">Customers</a>
                            <form method="POST" action="{{ route('auth.logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-gray-800">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-gray-300 hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>