<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl custom-text leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">
            @if(session('error'))
                <div class="custom-bg-error border-l-4 border-red-500 p-4 mb-4 rounded-r" role="alert">
                    <p class="text-red-700">{{ session('error') }}</p>
                </div>
            @endif

            <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg mb-6 border-2 border-[var(--border-muted)]">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold custom-text mb-4">Welcome to Dashboard</h2>
                    <div class="mt-4 custom-text-muted">
                        <p>Here you can manage your account and access all features of our application.</p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Quick Links -->
                <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border-2 border-[var(--border-muted)]">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold custom-text">Quick Links</h3>
                        <div class="mt-4 space-y-4">
                            <div>
                                <a href="{{ route('posts.index') }}" class="custom-link flex items-center">
                                    <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                    </svg>
                                    View All Posts
                                </a>
                            </div>
                            
                            <div>
                                <a href="{{ route('user.posts.create') }}" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                    <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Create New Post
                                </a>
                            </div>
                            


                            @if(Auth::user()->isAdmin())
                                <div class="pt-4 border-t border-gray-200">
                                    <h4 class="text-sm font-semibold text-gray-700 uppercase tracking-wider">Admin Links</h4>
                                    
                                    <div class="mt-2">
                                        <a href="{{ route('admin.posts.index') }}" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                            </svg>
                                            Manage All Posts
                                        </a>
                                    </div>
                                    
                                    <div class="mt-2">
                                        <a href="{{ route('admin.posts.create') }}" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                            </svg>
                                            Create Post (Admin)
                                        </a>
                                    </div>
                                    
                                    <div class="mt-2">
                                        <a href="{{ route('admin.users.index') }}" class="text-indigo-600 hover:text-indigo-800 flex items-center">
                                            <svg class="h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                            Manage Users
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- User Info -->
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg border-2 border-[var(--border-muted)]">
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Your Account</h3>
                        <div class="mt-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</div>
                                    <div class="text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                </div>
                            </div>
                            
                            <div class="mt-4 flex space-x-4">
                                <a href="{{ route('profile.show') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    Profile Settings
                                </a>
                                
                                @if(Auth::user()->isAdmin())
                                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-indigo-100 text-indigo-800">
                                        Admin User
                                    </span>
                                @else
                                    <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                        Regular User
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
