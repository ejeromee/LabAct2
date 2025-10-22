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
@endsection