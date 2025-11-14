@extends('layout.app')

@section('title', 'Dashboard - Blataditz')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-black to-gray-900 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">
                Welcome back, <span class="text-red-500">{{ $user->name }}</span>
            </h1>
            <p class="text-gray-400">Manage your gaming universe from here.</p>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-gradient-to-br from-blue-900/30 to-blue-800/20 border border-blue-700/50 rounded-xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-blue-600/30 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm mb-1">Total Orders</h3>
                <p class="text-3xl font-bold text-white">0</p>
            </div>

            <div class="bg-gradient-to-br from-green-900/30 to-green-800/20 border border-green-700/50 rounded-xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-green-600/30 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm mb-1">Total Spent</h3>
                <p class="text-3xl font-bold text-white">₱0.00</p>
            </div>

            <div class="bg-gradient-to-br from-purple-900/30 to-purple-800/20 border border-purple-700/50 rounded-xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-purple-600/30 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm mb-1">Reward Points</h3>
                <p class="text-3xl font-bold text-white">0</p>
            </div>

            <div class="bg-gradient-to-br from-red-900/30 to-red-800/20 border border-red-700/50 rounded-xl p-6">
                <div class="flex items-center justify-between mb-4">
                    <div class="p-3 bg-red-600/30 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-gray-400 text-sm mb-1">Wishlist Items</h3>
                <p class="text-3xl font-bold text-white">0</p>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-gray-800/50 border border-gray-700 rounded-xl p-6 mb-8">
            <h2 class="text-2xl font-bold text-white mb-6">Quick Actions</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="{{ route('customers.index') }}" class="flex items-center p-4 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-blue-500 transition group">
                    <div class="p-3 bg-blue-600/20 rounded-lg mr-4 group-hover:bg-blue-600/30 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white">Manage Customers</h3>
                        <p class="text-sm text-gray-400">View and manage all customers</p>
                    </div>
                </a>

                <a href="#" class="flex items-center p-4 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-green-500 transition group">
                    <div class="p-3 bg-green-600/20 rounded-lg mr-4 group-hover:bg-green-600/30 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white">Browse Products</h3>
                        <p class="text-sm text-gray-400">Explore our catalog</p>
                    </div>
                </a>

                <a href="#" class="flex items-center p-4 bg-gray-900/50 border border-gray-700 rounded-lg hover:border-purple-500 transition group">
                    <div class="p-3 bg-purple-600/20 rounded-lg mr-4 group-hover:bg-purple-600/30 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-white">Order History</h3>
                        <p class="text-sm text-gray-400">View your past orders</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="bg-gray-800/50 border border-gray-700 rounded-xl p-6">
            <h2 class="text-2xl font-bold text-white mb-6">Recent Activity</h2>
            <div class="text-center py-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-600 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                </svg>
                <p class="text-gray-400">No recent activity to display</p>
                <p class="text-sm text-gray-500 mt-2">Start shopping to see your activity here</p>
            </div>
        </div>
    </div>
</div>
@endsection