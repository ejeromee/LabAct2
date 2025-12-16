@extends('layouts.guest-layout')

@section('title', 'Blog - Explore Articles')

@section('content')

<!-- Enhanced Hero Section with Parallax Effect -->
<div class="relative py-24 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900 overflow-hidden">
    <!-- Animated background elements -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-0 left-1/2 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 animate-fade-in-up">
            Discover Amazing Stories
        </h1>
        <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto mb-8 animate-fade-in-up animation-delay-200">
            Explore insights, tutorials, and thoughts from our community
        </p>
        
        <!-- Search Bar with Animation -->
        <div class="max-w-2xl mx-auto animate-fade-in-up animation-delay-400">
            <div class="relative">
                <input type="text" 
                       id="searchInput"
                       placeholder="Search for articles..." 
                       class="w-full px-6 py-4 pr-12 rounded-full bg-white/10 backdrop-blur-md border-2 border-white/20 text-white placeholder-white/60 focus:outline-none focus:border-white/40 transition-all duration-300">
                <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-white text-indigo-600 p-2 rounded-full hover:bg-indigo-50 transition-colors duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Category Filters -->
        <div class="mt-8 flex flex-wrap justify-center gap-3 animate-fade-in-up animation-delay-600">
            <button class="category-filter active px-6 py-2 bg-white text-indigo-900 rounded-full font-medium hover:bg-indigo-50 transition-all duration-300 transform hover:scale-105" data-category="all">
                All
            </button>
            @foreach($categories as $category)
            <button class="category-filter px-6 py-2 bg-white/10 backdrop-blur-md text-white rounded-full font-medium hover:bg-white/20 transition-all duration-300 transform hover:scale-105" data-category="{{ strtolower($category->name) }}">
                {{ $category->name }}
            </button>
            @endforeach
        </div>
    </div>
</div>

<div class="py-16 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Call to Action for Guests -->
        @guest
            <div class="mb-12 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl shadow-2xl overflow-hidden transform hover:scale-[1.02] transition-transform duration-300">
                <div class="px-8 py-12 text-center">
                    <h3 class="text-3xl font-bold text-white mb-4">Join Our Community</h3>
                    <p class="text-white/90 text-lg mb-6 max-w-2xl mx-auto">
                        Create an account to publish your own articles, engage with authors, and personalize your reading experience.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3 bg-white text-indigo-600 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                            </svg>
                            Sign Up Free
                        </a>
                        <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                            Already a member? Log In
                        </a>
                    </div>
                </div>
            </div>
        @endguest
        
        @auth
            <div class="mb-8 flex justify-end">
                <a href="{{ route('user.posts.create') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-full font-semibold hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Write an Article
                </a>
            </div>
        @endauth
       
        @if(session('success'))
            <div class="mb-8 bg-green-50 border-l-4 border-green-500 text-green-700 p-4 rounded-lg shadow-md animate-slide-in-right" role="alert">
                <div class="flex items-center">
                    <svg class="h-6 w-6 text-green-500 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
            </div>
        @endif
        
        <!-- Posts Grid with Stagger Animation -->
        @if(count($posts) > 0)
            <div id="postsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts as $index => $post)
                    <x-animated-card class="post-card" style="animation-delay: {{ $index * 50 }}ms;">
                        <!-- Post Image with Hover Effect -->
                        <div class="relative h-56 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
                                @if($post->hasImage())
                                    @if($post->main_image)
                                        <img src="{{ $post->main_image->thumbnail_url ?? $post->thumbnail }}" 
                                             alt="{{ $post->title }}" 
                                             class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                                        
                                        <!-- Image count badge with pulse animation -->
                                        @if($post->image_count > 1)
                                            <div class="absolute top-3 right-3 bg-black/70 backdrop-blur-sm text-white text-xs px-3 py-1.5 rounded-full flex items-center animate-pulse">
                                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                                </svg>
                                                {{ $post->image_count }}
                                            </div>
                                        @endif
                                    @else
                                        <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                                    @endif
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-white opacity-50" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                @endif
                                
                                <!-- Overlay on hover -->
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            </div>
                        </div>
                        
                        <div class="p-6">
                            <!-- Category Badge with Animation -->
                            @if($post->category)
                                <div class="mb-3">
                                    <span class="inline-block px-3 py-1 bg-indigo-100 text-indigo-800 rounded-full text-xs font-semibold transform transition-transform duration-300 hover:scale-110">
                                        {{ $post->category->name }}
                                    </span>
                                </div>
                            @endif
                            
                            <!-- Post Title -->
                            <h3 class="text-xl font-bold text-gray-900 mb-3 line-clamp-2 group-hover:text-indigo-600 transition-colors duration-300">
                                <a href="{{ route('posts.show', $post->id) }}">
                                    {{ $post->title }}
                                </a>
                            </h3>
                            
                            <!-- Post Excerpt -->
                            <p class="text-gray-600 mb-4 line-clamp-3 leading-relaxed">
                                {{ $post->excerpt }}
                            </p>
                            
                            <!-- Post Meta Info with Icons -->
                            <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span class="font-medium">{{ $post->user->name }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <span>{{ $post->created_at->format('M d, Y') }}</span>
                                </div>
                            </div>
                            
                            <!-- Read More Button with Hover Effect -->
                            <div class="mt-4">
                                <a href="{{ route('posts.show', $post->id) }}" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 transition-colors duration-300 group/link">
                                    Read More
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 transform transition-transform duration-300 group-hover/link:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </x-animated-card>
                @endforeach
            </div>
            
            <!-- Enhanced Pagination -->
            <div class="mt-12">
                <div class="flex justify-center">
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <!-- Empty State with Illustration -->
            <div class="text-center py-16">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-32 w-32 mx-auto text-gray-300 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Posts Yet</h3>
                <p class="text-gray-600 mb-6">Be the first to share your story with the community!</p>
                @auth
                    <a href="{{ route('user.posts.create') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-full font-semibold hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        Create First Post
                    </a>
                @else
                    <a href="{{ route('register') }}" class="inline-flex items-center px-6 py-3 bg-indigo-600 text-white rounded-full font-semibold hover:bg-indigo-700 transition-all duration-300 transform hover:scale-105">
                        Sign Up to Get Started
                    </a>
                @endauth
            </div>
        @endif
    </div>
</div>

<!-- Add custom animations CSS -->
<style>
@keyframes blob {
    0%, 100% { transform: translate(0, 0) scale(1); }
    33% { transform: translate(30px, -50px) scale(1.1); }
    66% { transform: translate(-20px, 20px) scale(0.9); }
}

@keyframes fade-in-up {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slide-in-right {
    from {
        opacity: 0;
        transform: translateX(50px);
    }
    to {
        opacity: 1;
        transform: translateX(0);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}

.animate-fade-in-up {
    animation: fade-in-up 0.6s ease-out;
}

.animation-delay-200 {
    animation-delay: 0.2s;
    animation-fill-mode: both;
}

.animation-delay-400 {
    animation-delay: 0.4s;
    animation-fill-mode: both;
}

.animation-delay-600 {
    animation-delay: 0.6s;
    animation-fill-mode: both;
}

.animate-slide-in-right {
    animation: slide-in-right 0.5s ease-out;
}

.post-card {
    animation: fade-in-up 0.6s ease-out both;
}

.category-filter.active {
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}
</style>

<!-- Add interactive JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    const postCards = document.querySelectorAll('.post-card');
    
    searchInput?.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        
        postCards.forEach(card => {
            const title = card.querySelector('h3').textContent.toLowerCase();
            const excerpt = card.querySelector('p').textContent.toLowerCase();
            
            if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                card.style.display = 'block';
                card.style.animation = 'fade-in-up 0.3s ease-out';
            } else {
                card.style.display = 'none';
            }
        });
    });
    
    // Category filter functionality
    const categoryFilters = document.querySelectorAll('.category-filter');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Remove active class from all filters
            categoryFilters.forEach(f => f.classList.remove('active'));
            categoryFilters.forEach(f => {
                f.classList.remove('bg-white', 'text-indigo-900');
                f.classList.add('bg-white/10', 'backdrop-blur-md', 'text-white');
            });
            
            // Add active class to clicked filter
            this.classList.add('active');
            this.classList.remove('bg-white/10', 'backdrop-blur-md', 'text-white');
            this.classList.add('bg-white', 'text-indigo-900');
            
            const category = this.textContent.trim().toLowerCase();
            
            postCards.forEach(card => {
                if (category === 'all') {
                    card.style.display = 'block';
                } else {
                    const cardCategory = card.querySelector('.bg-indigo-100')?.textContent.toLowerCase().trim();
                    if (cardCategory && cardCategory.includes(category)) {
                        card.style.display = 'block';
                        card.style.animation = 'fade-in-up 0.3s ease-out';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    });
    
    // Smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

@endsection
