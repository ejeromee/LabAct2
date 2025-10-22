@extends('layouts.guest-layout')

@section('title', 'Posts - ' . config('app.name'))

@section('content')

<div class="relative py-16 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); height: 300px;">
    <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/80 to-black/60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col h-full justify-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Our Blog</h1>
        <p class="text-xl text-white/90 max-w-3xl">Insights, news, and knowledge from our expert team</p>
    </div>
</div>

<div class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 gap-4">
            <div>
                <h2 class="text-2xl font-bold custom-text">Latest Posts</h2>
                <p class="text-gray-600 mt-1">Discover our most recent articles and insights</p>
            </div>
            
            @auth
                <a href="{{ route('user.posts.create') }}" class="inline-flex items-center px-5 py-2.5 bg-indigo-600 border border-transparent rounded-md font-medium text-sm text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Create New Post
                </a>
            @endauth
        </div>

       
        @if(session('success'))
            <div class="bg-green-50 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-md shadow-sm" role="alert">
                <div class="flex items-center">
                    <svg class="h-6 w-6 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
        @endif
        
        <!-- Posts Grid -->
        @if(count($posts) > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $post)
                    <div class="bg-white rounded-lg overflow-hidden shadow-md border border-gray-100 hover:shadow-lg transition duration-300">
                        <!-- Placeholder Image -->
                        <div class="h-48 bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-white opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        
                        <div class="p-6">
                            <!-- Category Badge -->
                            @if($post->category)
                                <div class="mb-3">
                                    <span class="px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-xs font-medium">
                                        {{ $post->category->name }}
                                    </span>
                                </div>
                            @endif
                            
                            <!-- Post Title -->
                            <h3 class="text-xl font-semibold text-gray-800 mb-3 line-clamp-2 hover:text-indigo-600 transition">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            
                            <!-- Post Excerpt -->
                            <p class="text-gray-600 mb-4 line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                            
                            <!-- Post Meta Info -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    {{ $post->user->name ?? 'Unknown User' }}
                                </div>
                                
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    {{ $post->created_at->format('M d, Y') }}
                                </div>
                            </div>
                            
                            <!-- Read More Link -->
                            <div class="mt-5 pt-4 border-t border-gray-100">
                                <a href="{{ route('posts.show', $post->id) }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-medium transition">
                                    Read Full Article
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            <!-- Pagination with Better Styling -->
            <div class="mt-12 flex justify-center">
                <div class="bg-white px-4 py-3 rounded-lg shadow-sm border border-gray-200">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <!-- Empty State -->
            <div class="bg-white rounded-lg shadow-md p-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                </svg>
                <h3 class="text-xl font-medium text-gray-900 mb-2">No posts found</h3>
                <p class="text-gray-500 mb-6">We haven't published any blog posts yet. Check back soon for new content!</p>
                
                @auth
                    <a href="{{ route('user.posts.create') }}" class="inline-flex items-center px-5 py-2 bg-indigo-600 border border-transparent rounded-md font-medium text-sm text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Create First Post
                    </a>
                @endauth
            </div>
        @endif
    </div>
</div>

<!-- Newsletter Section -->
<div class="py-12 bg-indigo-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-white mb-3">Subscribe to Our Newsletter</h2>
            <p class="text-lg text-indigo-100 mb-8">
                Get the latest articles, insights, and updates delivered directly to your inbox.
            </p>
            
            <form class="flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Enter your email address" 
                      class="flex-grow px-4 py-3 rounded-md border-0 focus:ring-2 focus:ring-white">
                      
                <button type="submit" class="bg-white text-indigo-600 font-medium px-6 py-3 rounded-md hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition">
                    Subscribe
                </button>
            </form>
            
            <p class="mt-3 text-sm text-indigo-200">
                We respect your privacy. Unsubscribe at any time.
            </p>
        </div>
    </div>
</div>
@endsection
