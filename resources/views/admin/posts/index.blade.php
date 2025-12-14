<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: oklch(0.15 0.08 231);">
            {{ __('Post Management') }}
        </h2>
    </x-slot>

    <style>
        /* Custom styles using provided color palette */
        .custom-bg-dark {
            background-color: oklch(0.92 0.04 231);
        }

        .custom-bg {
            background-color: oklch(0.96 0.04 231);
        }

        .custom-bg-light {
            background-color: oklch(1 0.04 231);
        }

        .custom-text {
            color: oklch(0.15 0.08 231);
        }

        .custom-text-muted {
            color: oklch(0.4 0.08 231);
        }

        .custom-highlight {
            color: oklch(1 0.08 231);
        }

        .custom-border {
            border-color: oklch(0.6 0.08 231);
        }

        .custom-border-muted {
            border-color: oklch(0.7 0.08 231);
        }

        .custom-primary {
            background-color: oklch(0.4 0.1 231);
        }

        .custom-secondary {
            background-color: oklch(0.4 0.1 51);
        }

        .custom-danger {
            background-color: oklch(0.5 0.08 30);
        }

        .custom-warning {
            background-color: oklch(0.5 0.08 100);
        }

        .custom-success {
            background-color: oklch(0.5 0.08 160);
        }

        .custom-info {
            background-color: oklch(0.5 0.08 260);
        }

        .custom-primary-text {
            color: white;
        }

        .custom-secondary-text {
            color: white;
        }

        .custom-danger-text {
            color: white;
        }

        .custom-warning-text {
            color: oklch(0.15 0.08 231);
        }

        .custom-success-text {
            color: white;
        }

        .custom-info-text {
            color: white;
        }

        .custom-btn-primary {
            background-color: oklch(0.4 0.1 231);
            color: white;
            transition: all 0.3s;
        }

        .custom-btn-primary:hover {
            background-color: oklch(0.3 0.1 231);
        }

        .custom-btn-danger {
            background-color: oklch(0.5 0.08 30);
            color: white;
            transition: all 0.3s;
        }

        .custom-btn-danger:hover {
            background-color: oklch(0.4 0.08 30);
        }
    </style>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="my-8">
                <a href="{{ route('admin.archives.index') }}" class="px-4 py-2 rounded custom-btn-primary">
                    &rarr; View Archived Posts
                </a>
            </div>

            <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border custom-border">

                <div class="p-6 sm:px-20 custom-bg-light">
                    <div class="mt-8 text-2xl custom-text">
                        Post Management
                    </div>

                    @if(session('success'))
                    <div class="mt-3 custom-success border-l-4 p-4 custom-success-text" style="border-color: oklch(0.6 0.08 160);" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                    @endif

                    <div class="mt-6">
                        <div class="border-b border-gray-200">
                            <p class="custom-text-muted mt-4">
                                This is the post management page where admins can view and manage all posts.
                            </p>

                            <div class="mt-8">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                            <div class="shadow overflow-hidden border custom-border sm:rounded-lg">
                                                <table class="min-w-full divide-y" style="border-color: oklch(0.7 0.08 231);">
                                                    <thead class="custom-bg-dark">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                ID
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                Image
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                Title
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                Content
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                Category
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                Author
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                                Created At
                                                            </th>
                                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium custom-text uppercase tracking-wider">
                                                                <span class="">Actions</span>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    @if(isset($posts) && count($posts) > 0)
                                                    <tbody class="custom-bg divide-y" style="border-color: oklch(0.7 0.08 231);">
                                                        @foreach($posts as $post)
                                                        <tr class="hover:custom-bg-dark transition-colors">
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="text-sm custom-text">{{ $post->id }}</div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center justify-center overflow-hidden rounded-md">
                                                                    @if($post->image)
                                                                    <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                                                                    @else
                                                                    <h1 class="custom-text italic font-sans">No Image</h1>
                
                                                                    @endif
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">

                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium custom-text">
                                                                            {{ $post->title }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="text-sm custom-text">{{ $post->excerpt }}</div>

                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $post->category ? 'bg-blue-100 text-blue-800' : 'bg-gray-100 text-gray-800' }}">
                                                                    {{ $post->category ? $post->category->name : 'Uncategorized' }}
                                                                </span>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full">
                                                                    {{ $post->user->name ?? 'Unknown User' }}
                                                                </span>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-sm custom-text-muted">
                                                                {{ $post->created_at->format('M d, Y') }}
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                                <div class="flex justify-center space-x-3">
                                                                    <a href="{{ route('admin.posts.edit', $post->id) }}" class="px-3 py-1 rounded custom-btn-primary">Edit</a>
                                                                    <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this post?')) { document.getElementById('archive-post-{{ $post->id }}').submit(); }">
                                                                        <button type="button" class="px-3 py-1 rounded custom-btn-danger">Delete</button>
                                                                    </a>
                                                                    <form id="archive-post-{{ $post->id }}" action="{{ route('admin.posts.archive', $post->id) }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    @else
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-sm custom-text-muted text-center">
                                                                No posts found.
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    @endif
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pagination Links -->
                                <div class="px-6 py-4">
                                    {{ $posts->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</x-app-layout>