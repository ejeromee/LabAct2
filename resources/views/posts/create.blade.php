<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl " style="color: oklch(0.15 0.08 231);">
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
            <div class="p-6 sm:px-20 custom-bg">
                <div class="mb-4">
                    <a href="{{ route('posts.index') }}" class="custom-link">
                        ← Back to all posts
                    </a>
                </div>

                <form action="{{ route('user.posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
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
                    <!-- Multiple File Upload -->
                    <div>
                        <label for="images" class="block text-sm font-medium custom-text">Upload Images</label>
                        <div class="mt-1">
                            <input type="file" name="images[]" id="images" multiple class="block w-full text-sm custom-text border custom-border rounded-lg cursor-pointer custom-bg-light focus:outline-none p-2" accept="image/*">
                        </div>
                        <p class="mt-1 text-sm custom-text-muted">Select multiple images (Max: 5 images, 2MB each). Formats: JPG, PNG, GIF</p>
                        
                        <!-- Image preview area -->
                        <div id="imagePreview" class="mt-3 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 hidden">
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

<script>
document.getElementById('images').addEventListener('change', function(e) {
    const files = e.target.files;
    const previewContainer = document.getElementById('imagePreview');
    previewContainer.innerHTML = '';
    
    if (files.length === 0) {
        previewContainer.classList.add('hidden');
        return;
    }
    
    // Validate file count
    if (files.length > 5) {
        alert('You can only upload a maximum of 5 images.');
        e.target.value = '';
        return;
    }
    
    previewContainer.classList.remove('hidden');
    
    Array.from(files).forEach((file, index) => {
        // Validate file size
        if (file.size > 2 * 1024 * 1024) {
            alert(`File "${file.name}" is too large. Maximum size is 2MB.`);
            return;
        }
        
        // Validate file type
        if (!file.type.match('image.*')) {
            alert(`File "${file.name}" is not an image.`);
            return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
            const imageDiv = document.createElement('div');
            imageDiv.className = 'relative';
            imageDiv.innerHTML = `
                <img src="${e.target.result}" class="w-full h-20 object-cover rounded border border-gray-300">
                <div class="absolute top-1 right-1 bg-black bg-opacity-50 text-white text-xs px-1 rounded">
                    ${index + 1}
                </div>
                <div class="text-xs text-center mt-1 custom-text truncate" title="${file.name}">
                    ${file.name}
                </div>
            `;
            previewContainer.appendChild(imageDiv);
        };
        reader.readAsDataURL(file);
    });
});
</script>

</x-app-layout>
