@extends('layout.app')

@section('title', 'Blataditz - Future of Gaming')

@section('content')
<!-- Hero Section -->
<section class="relative bg-black py-20 md:py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6">
                Dive Into The <span class="text-red-500">Future of Gaming</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl mb-10 max-w-3xl mx-auto">
                Unleash unparalleled power and experience cinematic adventures with our cutting-edge selection.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#explore" class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-full hover:bg-blue-700 transition duration-200 shadow-lg shadow-blue-500/50">
                    <span>Explore Now</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
                <a href="#hot-picks" class="inline-flex items-center justify-center px-8 py-4 bg-transparent border-2 border-white text-white font-semibold rounded-full hover:bg-white hover:text-black transition duration-200">
                    <span>Hot Picks</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Category Hub Section -->
<section id="explore" class="py-16 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Blataditz Hub: Browse by Category</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- PlayStation 5 -->
            <div class="group relative bg-gradient-to-br from-blue-900/20 to-gray-800/50 rounded-xl p-6 border border-gray-700 hover:border-blue-500 transition duration-300 cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-blue-600/0 to-blue-600/0 group-hover:from-blue-600/10 group-hover:to-blue-600/5 transition duration-300"></div>
                <div class="relative">
                    <div class="h-40 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-6xl">🎮</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">PlayStation 5</h3>
                    <a href="#" class="text-red-500 hover:text-red-400 inline-flex items-center text-sm font-medium">
                        Discover more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Nintendo Switch -->
            <div class="group relative bg-gradient-to-br from-red-900/20 to-gray-800/50 rounded-xl p-6 border border-gray-700 hover:border-red-500 transition duration-300 cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-red-600/0 to-red-600/0 group-hover:from-red-600/10 group-hover:to-red-600/5 transition duration-300"></div>
                <div class="relative">
                    <div class="h-40 bg-gradient-to-br from-red-500/20 to-pink-500/20 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-6xl">🕹️</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Nintendo Switch</h3>
                    <a href="#" class="text-red-500 hover:text-red-400 inline-flex items-center text-sm font-medium">
                        Discover more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- XBOX Series X -->
            <div class="group relative bg-gradient-to-br from-green-900/20 to-gray-800/50 rounded-xl p-6 border border-gray-700 hover:border-green-500 transition duration-300 cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-green-600/0 to-green-600/0 group-hover:from-green-600/10 group-hover:to-green-600/5 transition duration-300"></div>
                <div class="relative">
                    <div class="h-40 bg-gradient-to-br from-green-500/20 to-emerald-500/20 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-6xl">🎯</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">XBOX Series X</h3>
                    <a href="#" class="text-red-500 hover:text-red-400 inline-flex items-center text-sm font-medium">
                        Discover more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- PC & Mac -->
            <div class="group relative bg-gradient-to-br from-purple-900/20 to-gray-800/50 rounded-xl p-6 border border-gray-700 hover:border-purple-500 transition duration-300 cursor-pointer overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-purple-600/0 to-purple-600/0 group-hover:from-purple-600/10 group-hover:to-purple-600/5 transition duration-300"></div>
                <div class="relative">
                    <div class="h-40 bg-gradient-to-br from-purple-500/20 to-pink-500/20 rounded-lg mb-4 flex items-center justify-center">
                        <span class="text-6xl">💻</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">PC & Mac</h3>
                    <a href="#" class="text-red-500 hover:text-red-400 inline-flex items-center text-sm font-medium">
                        Discover more
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Gaming Sections -->
<section class="py-16 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Featured Gaming Consoles -->
            <div class="bg-gradient-to-br from-blue-900 to-blue-700 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-4">Featured Gaming Consoles</h2>
                <p class="text-blue-100 mb-6">
                    Step into new worlds with the latest and most powerful gaming platforms.
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-blue-900 font-semibold rounded-lg hover:bg-gray-100 transition">
                    View Consoles
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Nintendo Switch Adventures -->
            <div class="bg-gradient-to-br from-red-900 to-red-700 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-4">Nintendo Switch Adventures</h2>
                <p class="text-red-100 mb-6">
                    Portable fun and epic journeys, anytime, anywhere.
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-red-900 font-semibold rounded-lg hover:bg-gray-100 transition">
                    Explore Games
                </a>
            </div>

            <!-- PlayStation Universe -->
            <div class="bg-gradient-to-br from-indigo-900 to-indigo-700 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-4">PlayStation Universe</h2>
                <p class="text-indigo-100 mb-6">
                    Dive into exclusive titles and breathtaking narratives.
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-indigo-900 font-semibold rounded-lg hover:bg-gray-100 transition">
                    Discover Titles
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>

            <!-- Xbox Epic Adventures -->
            <div class="bg-gradient-to-br from-green-900 to-green-700 rounded-2xl p-8 md:p-12">
                <h2 class="text-3xl md:text-4xl font-bold text-yellow-400 mb-4">Xbox Epic Adventures</h2>
                <p class="text-green-100 mb-6">
                    Unleash the beast with a vast library of powerful games.
                </p>
                <a href="#" class="inline-flex items-center px-6 py-3 bg-white text-green-900 font-semibold rounded-lg hover:bg-gray-100 transition">
                    Shop Xbox
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
