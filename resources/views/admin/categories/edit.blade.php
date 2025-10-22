<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: oklch(0.15 0.08 231);">
            {{ __('Edit Category') }}
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

        .custom-btn-primary {
            background-color: oklch(0.4 0.1 231);
            color: white;
            transition: all 0.3s;
        }

        .custom-btn-primary:hover {
            background-color: oklch(0.3 0.1 231);
        }

        .custom-btn-secondary {
            background-color: oklch(0.8 0.04 231);
            color: oklch(0.15 0.08 231);
            transition: all 0.3s;
        }

        .custom-btn-secondary:hover {
            background-color: oklch(0.7 0.04 231);
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="custom-bg-light overflow-hidden shadow-xl sm:rounded-lg border custom-border">
                <div class="p-6 sm:px-20 custom-bg-light">
                    <div class="mt-8 text-2xl custom-text">
                        Edit Category: {{ $category->name }}
                    </div>

                    <div class="mt-6">
                        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium custom-text mb-1">Name</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $category->name) }}" class="w-full px-3 py-2 border rounded-md custom-border-muted focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
                                @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium custom-text mb-1">Description (Optional)</label>
                                <textarea name="description" id="description" rows="4" class="w-full px-3 py-2 border rounded-md custom-border-muted focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ old('description', $category->description) }}</textarea>
                                @error('description')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-end mt-6">
                                <a href="{{ route('admin.categories.index') }}" class="custom-btn-secondary px-4 py-2 rounded-md mr-3">
                                    Cancel
                                </a>
                                <button type="submit" class="custom-btn-primary px-4 py-2 rounded-md">
                                    Update Category
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>