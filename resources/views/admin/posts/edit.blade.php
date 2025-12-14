<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl" style="color: oklch(0.15 0.08 231);">
            {{ __('Edit Post') }}
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
                        <a href="{{ route('admin.posts.index', $post['id']) }}" class="custom-link">
                            ← Back to post
                        </a>
                    </div>

                <form action="{{ route('admin.posts.update', $post['id']) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
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
                            <input type="text" name="title" id="title" value="{{ old('title', $post['title']) }}" class="custom-form-input shadow" required>
                        </div>
                    </div>

                    <div>
                        <label for="content" class="block text-sm font-medium custom-text">Content</label>
                        <div class="mt-1">
                            <textarea name="content" id="content" rows="10" class="custom-form-input shadow" required>{{ old('content', $post['content']) }}</textarea>
                        </div>
                    </div>

                   
                    <!-- Current Images Display -->
                    @if($post->images->count() > 0 || $post['image'])
                        <div>
                            <label class="block text-sm font-medium custom-text">Current Images</label>
                            <div class="mt-3 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                                <!-- New multiple images -->
                                @foreach($post->images as $image)
                                    <div class="relative group">
                                        <img src="{{ $image->thumbnail_url }}" alt="Post image" class="w-full h-24 object-cover rounded-lg shadow-md">
                                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-50 transition rounded-lg flex items-center justify-center">
                                            <button type="button" onclick="markForDeletion({{ $image->id }})" class="bg-red-600 text-white p-1 rounded-full opacity-0 group-hover:opacity-100 transition">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        @if($image->is_featured)
                                            <div class="absolute top-1 left-1 bg-yellow-500 text-white text-xs px-1 rounded">Featured</div>
                                        @endif
                                    </div>
                                @endforeach
                                
                                
                                @if($post['image'] && $post->images->count() === 0)
                                    <div class="relative">
                                        <img src="{{ asset($post['image']) }}" alt="Current post image" class="w-full h-24 object-cover rounded-lg shadow-md">
                                        <div class="absolute top-1 left-1 bg-blue-500 text-white text-xs px-1 rounded">Legacy</div>
                                    </div>
                                @endif
                            </div>

                            <div class="hidden">
                                @foreach($post->images as $image)
                                    <input type="hidden" name="imagesToDelete[]" value="{{ $image->id }}">
                                @endforeach
                            </div>
                            <div id="imagesToDelete"></div>
                        </div>
                    @endif

                    <div>
                        <label for="images" class="block text-sm font-medium custom-text">Add More Images</label>
                        <div class="mt-1">
                            <input type="file" name="images[]" id="images" multiple class="block w-full text-sm custom-text border custom-border rounded-lg cursor-pointer custom-bg-light focus:outline-none p-2" accept="image/*">
                        </div>
                        <p class="mt-1 text-sm custom-text-muted">Select multiple images (Max: 5 images total, 2MB each). Formats: JPG, PNG, GIF</p>
                        
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
                                    <option value="{{ $category->id }}" {{ (old('category_id', $post['category_id']) == $category->id) ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="custom-btn-primary inline-flex items-center">
                            Update Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
// Array to track images marked for deletion
let imagesToDelete = [];

function markForDeletion(imageId) {
    if (confirm('Are you sure you want to delete this image?')) {
        // Add to deletion array
        imagesToDelete.push(imageId);
        
        // Hide the image visually
        event.target.closest('.relative').style.opacity = '0.3';
        event.target.closest('.relative').style.pointerEvents = 'none';
        
        // Add hidden input
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'delete_images[]';
        hiddenInput.value = imageId;
        document.getElementById('imagesToDelete').appendChild(hiddenInput);
    }
}

// Image preview functionality (same as create form)
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
                    +${index + 1}
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
