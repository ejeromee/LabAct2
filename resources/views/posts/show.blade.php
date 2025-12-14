@extends('layouts.guest-layout')

@section('title', $post->title . ' - ' . config('app.name'))

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border-2 border-[var(--border-muted)] ">
            <div class="p-6 sm:px-20">
                @if(session('success'))
                <div class="custom-bg-success border-l-4 border-green-500 p-4 mb-4 rounded-r" role="alert">
                    <p class="text-green-700">{{ session('success') }}</p>
                </div>
                @endif

                <div class="mb-4">
                    <a href="{{ route('posts.index') }}" class="text-indigo-600 hover:text-indigo-800">
                        ← Back to all posts
                    </a>
                </div>

                <div class="mt-8">
                    <h1 class="text-3xl font-bold text-gray-800">{{ $post->title }}</h1>
                    <p class="text-sm text-gray-500 mt-2">
                        Posted by {{ $post->user->name ?? 'Unknown User' }} on {{ $post->created_at->format('M d, Y') }}
                        @if($post->category)
                            <span class="ml-2 px-2 py-0.5 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">
                                {{ $post->category->name }}
                            </span>
                        @endif
                    </p>

                    <!-- Post Images -->
                    @if($post->hasImage())
                        <div class="mt-6 mb-8">
                            @if($post->images->count() > 0)
                                <!-- Multiple images from new system -->
                                @if($post->images->count() == 1)
                                    <!-- Single image -->
                                    <img src="{{ $post->images->first()->image_url }}" alt="{{ $post->title }}" class="w-full max-w-2xl mx-auto rounded-lg shadow-lg">
                                @else
                                    <!-- Multiple images gallery -->
                                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                                        @foreach($post->images as $image)
                                            <div class="relative group cursor-pointer" onclick="openImageModal('{{ $image->image_url }}', '{{ $post->title }}')">
                                                <img src="{{ $image->thumbnail_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-lg shadow-md group-hover:shadow-lg transition">
                                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition rounded-lg flex items-center justify-center">
                                                    <svg class="w-8 h-8 text-white opacity-0 group-hover:opacity-100 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @else
                                <!-- Legacy single image -->
                                <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full max-w-2xl mx-auto rounded-lg shadow-lg">
                            @endif
                        </div>
                    @endif

                    <div class="mt-8 text-gray-700 prose max-w-none">
                        <p>{{ $post->content }}</p>
                    </div>

                    @if(Auth::check() && Auth::user()->isAdmin())
                    <div class="mt-8 border-t border-[var(--secondary)] pt-4 flex space-x-4">
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 focus:bg-indigo-500 active:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            Edit Post
                        </a>

                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                            @csrf

                            <a href="{{ route('admin.posts.archive', $post->id) }}" class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150" onclick="return confirm('Are you sure you want to delete this post?')">
                                Delete Post
                            </a>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 z-50 hidden flex items-center justify-center p-4">
    <div class="relative max-w-4xl max-h-full">
        <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white bg-black bg-opacity-50 rounded-full p-2 hover:bg-opacity-75 transition">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
</div>

<script>
function openImageModal(imageUrl, altText) {
    document.getElementById('modalImage').src = imageUrl;
    document.getElementById('modalImage').alt = altText;
    document.getElementById('imageModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeImageModal() {
    document.getElementById('imageModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside the image
document.getElementById('imageModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeImageModal();
    }
});

// Close modal with escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeImageModal();
    }
});
</script>

@endsection