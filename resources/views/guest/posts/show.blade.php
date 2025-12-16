@extends('layouts.guest-layout')

@section('title', $post->title . ' - ' . config('app.name'))

@section('content')

<!-- Hero Section with Post Image -->
<div class="relative bg-gray-900 overflow-hidden" style="min-height: 60vh;">
    @if($post->hasImage() && $post->main_image)
        <img src="{{ $post->main_image->url ?? $post->thumbnail }}" 
             alt="{{ $post->title }}" 
             class="absolute inset-0 w-full h-full object-cover opacity-40">
    @else
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-900"></div>
    @endif
    
    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-transparent"></div>
    
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-24 flex flex-col justify-end" style="min-height: 60vh;">
        <!-- Breadcrumb -->
        <nav class="mb-8 animate-fade-in-up">
            <ol class="flex items-center space-x-2 text-sm">
                <li>
                    <a href="{{ route('home') }}" class="text-white/70 hover:text-white transition-colors duration-300">Home</a>
                </li>
                <li class="text-white/50">/</li>
                <li>
                    <a href="{{ route('posts.index') }}" class="text-white/70 hover:text-white transition-colors duration-300">Blog</a>
                </li>
                <li class="text-white/50">/</li>
                <li class="text-white font-medium">{{ Str::limit($post->title, 30) }}</li>
            </ol>
        </nav>
        
        <!-- Category Badge -->
        @if($post->category)
            <div class="mb-6 animate-fade-in-up animation-delay-200">
                <span class="inline-block px-4 py-2 bg-indigo-600 text-white rounded-full text-sm font-semibold shadow-lg">
                    {{ $post->category->name }}
                </span>
            </div>
        @endif
        
        <!-- Title -->
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight animate-fade-in-up animation-delay-300">
            {{ $post->title }}
        </h1>
        
        <!-- Meta Information -->
        <div class="flex flex-wrap items-center gap-6 text-white/90 animate-fade-in-up animation-delay-400">
            <div class="flex items-center">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-indigo-400 to-purple-600 flex items-center justify-center text-white font-bold text-lg mr-3 shadow-lg">
                    {{ substr($post->user->name, 0, 1) }}
                </div>
                <div>
                    <p class="font-semibold">{{ $post->user->name }}</p>
                    <p class="text-sm text-white/70">Author</p>
                </div>
            </div>
            
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span>{{ $post->created_at->format('F d, Y') }}</span>
            </div>
            
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ ceil(str_word_count($post->content) / 200) }} min read</span>
            </div>
        </div>
    </div>
</div>

<!-- Article Content -->
<article class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Social Share Buttons (Sticky) -->
        <div class="hidden lg:block fixed left-8 top-1/2 -translate-y-1/2 z-40">
            <div class="flex flex-col gap-3">
                <button class="w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-lg" title="Share on Facebook">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </button>
                <button class="w-12 h-12 bg-sky-500 hover:bg-sky-600 text-white rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-lg" title="Share on Twitter">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                </button>
                <button class="w-12 h-12 bg-blue-700 hover:bg-blue-800 text-white rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-lg" title="Share on LinkedIn">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </button>
                <button class="w-12 h-12 bg-gray-800 hover:bg-gray-900 text-white rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110 shadow-lg" title="Copy Link">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" /></svg>
                </button>
            </div>
        </div>
        
        <!-- Featured Image -->
        @if($post->hasImage() && $post->main_image)
            <div class="mb-12">
                <div class="rounded-2xl overflow-hidden shadow-2xl">
                    <img src="{{ $post->main_image->image_url ?? asset($post->main_image->image_path) }}" 
                         alt="{{ $post->title }}" 
                         class="w-full h-auto object-cover cursor-pointer hover:opacity-95 transition-opacity duration-300"
                         onclick="openImageModal('{{ $post->main_image->image_url ?? asset($post->main_image->image_path) }}')">
                </div>
            </div>
        @endif

        <!-- Image Gallery -->
        @if($post->hasImage() && count($post->images) > 1)
            <div class="mb-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    Gallery ({{ count($post->images) }} images)
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($post->images as $image)
                        <div class="group relative aspect-square overflow-hidden rounded-xl cursor-pointer shadow-md hover:shadow-2xl transition-all duration-300" onclick="openImageModal('{{ $image->image_url ?? asset($image->image_path) }}')">
                            <img src="{{ $image->thumbnail_url ?? asset($image->thumbnail_path) }}" 
                                 alt="Gallery image {{ $loop->iteration }}" 
                                 class="w-full h-full object-cover transform transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition-all duration-300 flex items-center justify-center">
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                    </svg>
                                    <span class="text-white text-sm font-semibold">View Full Size</span>
                                </div>
                            </div>
                            <div class="absolute top-2 right-2 bg-black/70 backdrop-blur-sm text-white text-xs px-2 py-1 rounded-full">
                                {{ $loop->iteration }}/{{ count($post->images) }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        
        <!-- Article Content -->
        <div class="prose prose-lg prose-indigo max-w-none">
            <div class="text-gray-800 leading-relaxed whitespace-pre-line">
                {{ $post->content }}
            </div>
        </div>
        
        <!-- Call to Action for Guests -->
        @guest
            <div class="mt-16 bg-gradient-to-r from-indigo-600 to-purple-600 rounded-2xl p-10 text-center shadow-2xl transform hover:scale-[1.02] transition-transform duration-300">
                <h3 class="text-3xl font-bold text-white mb-4">Enjoying this article?</h3>
                <p class="text-white/90 text-lg mb-6 max-w-2xl mx-auto">
                    Join our community to access exclusive content, connect with authors, and share your own stories.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-8 py-3 bg-white text-indigo-600 rounded-full font-bold hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        Create Free Account
                    </a>
                    <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold hover:bg-white/10 transition-all duration-300 transform hover:scale-105">
                        Sign In
                    </a>
                </div>
            </div>
        @endguest
        
        <!-- Back to Blog Button -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <a href="{{ route('posts.index') }}" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold transition-colors duration-300 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 transform transition-transform duration-300 group-hover:-translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to All Articles
            </a>
        </div>
    </div>
</article>

<!-- Related Posts Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-gray-900 mb-8">Related Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- This would be populated with actual related posts -->
            <div class="text-center text-gray-500 col-span-3 py-8">
                More articles coming soon...
            </div>
        </div>
    </div>
</section>

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black/90 z-50 hidden items-center justify-center p-4" onclick="closeImageModal()">
    <div class="relative max-w-7xl max-h-full">
        <button onclick="closeImageModal()" class="absolute -top-12 right-0 text-white hover:text-gray-300 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <img id="modalImage" src="" alt="Full size" class="max-w-full max-h-[90vh] rounded-lg shadow-2xl">
    </div>
</div>

<style>
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

.animate-fade-in-up {
    animation: fade-in-up 0.6s ease-out;
}

.animation-delay-200 {
    animation-delay: 0.2s;
    animation-fill-mode: both;
}

.animation-delay-300 {
    animation-delay: 0.3s;
    animation-fill-mode: both;
}

.animation-delay-400 {
    animation-delay: 0.4s;
    animation-fill-mode: both;
}

.prose {
    color: #374151;
    font-size: 1.125rem;
    line-height: 1.75;
}

.prose h2 {
    font-size: 1.875rem;
    font-weight: 700;
    margin-top: 2em;
    margin-bottom: 1em;
    color: #111827;
}

.prose h3 {
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 1.6em;
    margin-bottom: 0.6em;
    color: #1f2937;
}

.prose p {
    margin-bottom: 1.25em;
}

.prose strong {
    font-weight: 600;
    color: #111827;
}
</style>

<script>
function openImageModal(imageUrl) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    modalImage.src = imageUrl;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = 'auto';
}

// Close modal on Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});

// Smooth scroll to top button
let scrollTopBtn = document.createElement('button');
scrollTopBtn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" /></svg>';
scrollTopBtn.className = 'fixed bottom-8 right-8 bg-indigo-600 text-white p-3 rounded-full shadow-lg hover:bg-indigo-700 transition-all duration-300 transform hover:scale-110 opacity-0 pointer-events-none z-40';
scrollTopBtn.id = 'scrollTopBtn';
document.body.appendChild(scrollTopBtn);

window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
        scrollTopBtn.style.opacity = '1';
        scrollTopBtn.style.pointerEvents = 'auto';
    } else {
        scrollTopBtn.style.opacity = '0';
        scrollTopBtn.style.pointerEvents = 'none';
    }
});

scrollTopBtn.addEventListener('click', function() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
</script>

@endsection
