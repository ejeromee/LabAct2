<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: oklch(0.15 0.08 231);">
            {{ __('Category Management') }}
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
            <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border custom-border">
                <div class="p-6 sm:px-20 custom-bg-light">
                    <div class="mt-8 text-2xl custom-text flex justify-between">
                        <span>Category Management</span>
                        <a href="{{ route('admin.categories.create') }}" class="px-4 py-2 rounded custom-btn-primary text-base">
                            Add New Category
                        </a>
                    </div>

                    @if(session('success'))
                    <div class="mt-3 custom-success border-l-4 p-4 custom-success-text" style="border-color: oklch(0.6 0.08 160);" role="alert">
                        <p>{{ session('success') }}</p>
                    </div>
                    @endif

                    <div class="mt-6">
                        <p class="custom-text-muted mt-4">
                            This is the category management page where admins can create, edit and delete categories.
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
                                                            Name
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                            Slug
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                            Posts Count
                                                        </th>
                                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium custom-text uppercase tracking-wider">
                                                            <span class="">Actions</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                @if(count($categories) > 0)
                                                <tbody class="custom-bg divide-y" style="border-color: oklch(0.7 0.08 231);">
                                                    @foreach($categories as $category)
                                                    <tr class="hover:custom-bg-dark transition-colors">
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm custom-text">{{ $category->id }}</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div>
                                                                    <div class="text-sm font-medium custom-text">
                                                                        {{ $category->name }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm custom-text">{{ $category->slug }}</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm custom-text">{{ $category->posts->count() }}</div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                            <div class="flex space-x-3">
                                                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-3 py-1 rounded custom-btn-primary">Edit</a>
                                                                <a href="#" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this category?')) { document.getElementById('delete-category-{{ $category->id }}').submit(); }">
                                                                    <button type="button" class="px-3 py-1 rounded custom-btn-danger">Delete</button>
                                                                </a>
                                                                <form id="delete-category-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display: none;">
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
                                                        <td colspan="5" class="px-6 py-4 whitespace-nowrap text-sm custom-text-muted text-center">
                                                            No categories found. <a href="{{ route('admin.categories.create') }}" class="text-blue-600 hover:underline">Create your first category</a>.
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                @endif
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>