<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-gradient">
                {{ __('Dashboard') }}
            </h2>
            <span class="text-sm text-gray-500">Welcome back, {{ Auth::user()->name }}!</span>
        </div>
    </x-slot>

    <div class="py-8 relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-200 to-purple-200 rounded-full opacity-20 blur-3xl animate-pulse-slow"></div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative z-10">
            @if(session('error'))
                <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-r shadow-lg animate-slide-in-right" role="alert">
                    <p class="text-red-700 font-medium">{{ session('error') }}</p>
                </div>
            @endif

            <!-- Welcome Card -->
            <div class="bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-600 overflow-hidden shadow-2xl rounded-2xl mb-8 animate-fade-in-up">
                <div class="p-8 relative">
                    <!-- Floating particles -->
                    <div class="absolute inset-0 overflow-hidden">
                        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-white rounded-full opacity-60 animate-float"></div>
                        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-white rounded-full opacity-40 animate-float animation-delay-1000"></div>
                        <div class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-white rounded-full opacity-50 animate-float animation-delay-2000"></div>
                    </div>
                    
                    <div class="relative">
                        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-2">Welcome to Your Dashboard</h2>
                        <p class="text-xl text-indigo-100">Here you can manage your account and access all features of our application</p>
                    </div>
                </div>
            </div>

            <!-- Enhanced Quick Actions Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- View All Posts Card -->
                <a href="{{ route('posts.index') }}" class="group block bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-200">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">View All Posts</h3>
                        <p class="text-sm text-gray-600">Browse and explore all blog posts</p>
                    </div>
                </a>
                
                <!-- Create New Post Card -->
                <a href="{{ route('user.posts.create') }}" class="group block bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center justify-center h-14 w-14 rounded-xl bg-gradient-to-br from-green-500 to-emerald-600 text-white shadow-lg group-hover:scale-110 transition-transform duration-300">
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-green-600 transition-colors duration-300">Create New Post</h3>
                        <p class="text-sm text-gray-600">Share your thoughts with the world</p>
                    </div>
                </a>
                
                <!-- Profile Card -->
                <a href="{{ route('profile.show') }}" class="group block bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100 hover:-translate-y-2 animate-fade-in-up animation-delay-400">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex-shrink-0">
                                <img class="h-14 w-14 rounded-full ring-4 ring-gray-100 group-hover:ring-indigo-200 transition-all duration-300" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                            </div>
                            @if(Auth::user()->isAdmin())
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-indigo-500 to-purple-600 text-white shadow-md">
                                    ADMIN
                                </span>
                            @else
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-gradient-to-r from-green-500 to-emerald-600 text-white shadow-md">
                                    USER
                                </span>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 group-hover:text-indigo-600 transition-colors duration-300">Profile Settings</h3>
                        <p class="text-sm text-gray-600">Manage your account</p>
                    </div>
                </a>
            </div>
            
            @if(Auth::user()->isAdmin())
            <!-- Admin Quick Links -->
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 mb-8 border border-purple-100 animate-fade-in-up animation-delay-500">
                <div class="flex items-center mb-6">
                    <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-gradient-to-br from-purple-600 to-pink-600 text-white shadow-lg">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="ml-4 text-2xl font-bold text-gray-900">Admin Dashboard</h3>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <a href="{{ route('admin.posts.index') }}" class="group flex items-center p-4 bg-white rounded-xl hover:bg-gradient-to-r hover:from-purple-50 hover:to-pink-50 transition-all duration-300 border border-transparent hover:border-purple-200 shadow-sm hover:shadow-md">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-purple-100 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <span class="ml-4 text-gray-700 font-medium group-hover:text-purple-600 transition-colors duration-300">Manage All Posts</span>
                    </a>
                    
                    <a href="{{ route('admin.posts.create') }}" class="group flex items-center p-4 bg-white rounded-xl hover:bg-gradient-to-r hover:from-blue-50 hover:to-cyan-50 transition-all duration-300 border border-transparent hover:border-blue-200 shadow-sm hover:shadow-md">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-blue-100 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                        <span class="ml-4 text-gray-700 font-medium group-hover:text-blue-600 transition-colors duration-300">Create Post (Admin)</span>
                    </a>
                    
                    <a href="{{ route('admin.users.index') }}" class="group flex items-center p-4 bg-white rounded-xl hover:bg-gradient-to-r hover:from-pink-50 hover:to-rose-50 transition-all duration-300 border border-transparent hover:border-pink-200 shadow-sm hover:shadow-md">
                        <div class="flex items-center justify-center h-10 w-10 rounded-lg bg-pink-100 text-pink-600 group-hover:bg-pink-600 group-hover:text-white transition-colors duration-300">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <span class="ml-4 text-gray-700 font-medium group-hover:text-pink-600 transition-colors duration-300">Manage Users</span>
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
