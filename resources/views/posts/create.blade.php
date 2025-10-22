<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: oklch(0.15 0.08 231);">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <style>
        .custom-bg-dark { background-color: oklch(0.92 0.04 231); }
        .custom-bg { background-color: oklch(0.96 0.04 231); }
        .custom-bg-light { background-color: oklch(1 0.04 231); }
        .custom-text { color: oklch(0.15 0.08 231); }
        .custom-text-muted { color: oklch(0.4 0.08 231); }
        .custom-highlight { color: oklch(1 0.08 231); }
        .custom-border { border-color: oklch(0.6 0.08 231); }
        .custom-border-muted { border-color: oklch(0.7 0.08 231); }
        .custom-primary { background-color: oklch(0.4 0.1 231); }
        .custom-secondary { background-color: oklch(0.4 0.1 51); }
        .custom-danger { background-color: oklch(0.5 0.08 30); }
        .custom-warning { background-color: oklch(0.5 0.08 100); }
        .custom-success { background-color: oklch(0.5 0.08 160); }
        .custom-info { background-color: oklch(0.5 0.08 260); }
        
        .custom-form-input {
            border-color: oklch(0.6 0.08 231);
            color: oklch(0.15 0.08 231);
            background-color: oklch(1 0.04 231);
            padding: 0.5rem 0.75rem;
            border-radius: 0.375rem;
            width: 100%;
        }
        
        .custom-form-input:focus {
            outline: none;
            border-color: oklch(0.4 0.1 231);
            box-shadow: 0 0 0 3px rgba(156, 163, 175, 0.2);
        }
        
        .custom-btn-primary {
            background-color: oklch(0.4 0.1 231);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            font-weight: 500;
            transition: all 0.3s;
        }
        .custom-btn-primary:hover {
            background-color: oklch(0.3 0.1 231);
        }
        
        .custom-link {
            color: oklch(0.4 0.1 231);
            transition: all 0.3s;
        }
        .custom-link:hover {
            color: oklch(0.3 0.1 231);
        }
    </style>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border custom-border">
            <div class="p-6 sm:px-20 custom-bg-light">
                <div class="mb-4">
                    <a href="{{ route('posts.index') }}" class="custom-link">
                        ← Back to all posts
                    </a>
                </div>

                <form action="{{ route('user.posts.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    @if ($errors->any())
                        <div class="custom-danger border-l-4 p-4 mb-4 text-white" style="border-color: oklch(0.4 0.08 30);" role="alert">
                            <p class="font-bold">Please fix the following errors:</p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div>
                        <label for="title" class="block text-sm font-medium custom-text">Title</label>
                        <div class="mt-1">
                            <input type="text" name="title" id="title" value="{{ old('title') }}" class="custom-form-input shadow" required>
                        </div>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium custom-text">Content</label>
                        <div class="mt-1">
                            <textarea name="content" id="content" rows="10" class="custom-form-input shadow" required>{{ old('content') }}</textarea>
                        </div>
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-medium custom-text">Category</label>
                        <div class="mt-1">
                            <select name="category_id" id="category_id" class="custom-form-input shadow">
                                <option value="">-- Select Category --</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="custom-btn-primary inline-flex items-center">
                            Create Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
