<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use App\Models\PostImage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;

class PostController extends Controller
{
    /**
     * Display a listing of the posts.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $posts = Post::with(['user', 'category'])
            ->orderBy('id', 'desc')->oldest()
            ->paginate(6);

        return view('posts.index', compact('posts'));
    }

    /**
     * List all active posts for admin.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function list(): View
    {
        $posts = Post::with(['user', 'category'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show archived posts for admin.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function showArchive(): View
    {
        $archivedPosts = Post::onlyTrashed()
            ->with(['user', 'category'])
            ->orderBy('id', 'desc')
            ->paginate(10);
        
        return view('admin.archives.index', compact('archivedPosts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        $posts = Post::all();
        $categories = \App\Models\Category::orderBy('name')->get();
        return view('posts.create', compact('posts', 'categories'));
    }

    /**
     * Store a newly created post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // Debug: Log the entire request
        Log::info('Store method called');
        Log::info('Request data: ' . json_encode($request->all()));
        Log::info('Has files: ' . ($request->hasFile('images') ? 'YES' : 'NO'));
        
        if ($request->hasFile('images')) {
            $files = $request->file('images');
            Log::info('Files received: ' . count($files));
            foreach ($files as $index => $file) {
                Log::info("File $index: " . $file->getClientOriginalName() . ' (' . $file->getSize() . ' bytes)');
            }
        }

        // validate yung input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120', // Increased to 5MB and added webp
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $validated['excerpt'] = substr($validated['content'], 0, 100) . (strlen($validated['content']) > 100 ? '...' : '');

        $validated['user_id'] = Auth::id();
        
        
        $validated['image'] = null;

    
        unset($validated['images']);

        // Create the post first
        $post = Post::create($validated);

        // Debug logging
        Log::info('Post created: ' . $post->id . ' - Title: ' . $post->title);
        Log::info('Request has images: ' . ($request->hasFile('images') ? 'YES' : 'NO'));
        
        if ($request->hasFile('images')) {
            $imageFiles = $request->file('images');
            Log::info('Number of images received: ' . count($imageFiles));
            $this->handleMultipleImageUpload($imageFiles, $post);
        } else {
            Log::info('No images were uploaded for post: ' . $post->id);
        }

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id): View
    {
        $post = Post::with(['user', 'category'])->findOrFail($id);

        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id): View
    {
        $post = Post::with('user')->findOrFail($id);
        $categories = \App\Models\Category::orderBy('name')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified post in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'nullable|exists:categories,id',
            'delete_images' => 'nullable|array',
            'delete_images.*' => 'integer|exists:post_images,id'
        ]);

        $validated['excerpt'] = substr($validated['content'], 0, 100) . (strlen($validated['content']) > 100 ? '...' : '');

        
        unset($validated['images'], $validated['delete_images']);

        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $imageToDelete = PostImage::where('id', $imageId)->where('post_id', $post->id)->first();
                if ($imageToDelete) {
                   
                    if (file_exists(public_path($imageToDelete->image_path))) {
                        unlink(public_path($imageToDelete->image_path));
                    }
                    if (file_exists(public_path($imageToDelete->thumbnail_path))) {
                        unlink(public_path($imageToDelete->thumbnail_path));
                    }
                    
                    $imageToDelete->delete();
                }
            }
        }

        // Handle new image uploads
        if ($request->hasFile('images')) {
            $this->handleMultipleImageUpload($request->file('images'), $post);
        }

        $post->update($validated);

        return redirect()->route('admin.posts.index', $id)
            ->with('success', 'Post updated successfully!');
    }
    
    /**
     * Permanently remove an archived post from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroyPermanent($id): RedirectResponse
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->forceDelete();
        
        return redirect()->route('admin.archives.index')
            ->with('success', 'Post permanently deleted!');
    }

    /**
     * Soft delete (archive) a post.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function archive($id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post archived successfully!');
    }

    /**
     * Restore a soft-deleted post.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id): RedirectResponse
    {
        $post = Post::withTrashed()->findOrFail($id);
        $post->restore();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post restored successfully!');
    }

    /**
     * Handle multiple image upload for a post
     *
     * @param array $images
     * @param Post $post
     * @return void
     */
    private function handleMultipleImageUpload(array $images, Post $post): void
    {
        Log::info('Starting multiple image upload for post: ' . $post->id . ' with ' . count($images) . ' images');
        
        foreach ($images as $index => $image) {
            try {
                Log::info('Processing image ' . ($index + 1) . ': ' . $image->getClientOriginalName());
                
                // Get file info before moving
                $extension = $image->getClientOriginalExtension();
                $originalName = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $originalFileName = $image->getClientOriginalName();
                $fileSize = $image->getSize(); // Get size BEFORE moving
                $imageName = $originalName . '_' . $post->id . '_' . uniqid('', true) . '.' . $extension;
                
                
                $image->move(public_path('storage/posts'), $imageName);
                $imagePath = 'storage/posts/' . $imageName;
                
                
                $imageManager = ImageManager::gd();
                $fullImagePath = public_path($imagePath);
                
                
                $processedImage = $imageManager->read($fullImagePath);
                $processedImage->scaleDown(width: 500, height: 400);
                $processedImage->save($fullImagePath);
                
                
                $thumbnailDir = public_path('storage/posts/thumbnails');
                if (!file_exists($thumbnailDir)) {
                    mkdir($thumbnailDir, 0755, true);
                }
                
                $thumbnailImage = $imageManager->read($fullImagePath);
                $thumbnailImage->cover(300, 200);
                $thumbnailPath = $thumbnailDir . '/' . $imageName;
                $thumbnailImage->save($thumbnailPath);
                
                
                $postImage = PostImage::create([
                    'post_id' => $post->id,
                    'image_path' => $imagePath,
                    'thumbnail_path' => 'storage/posts/thumbnails/' . $imageName,
                    'original_name' => $originalFileName,
                    'file_size' => $fileSize, // Use the size we got before moving
                    'order' => $index,
                    'is_featured' => $index === 0 
                ]);
                
                Log::info('PostImage created successfully: ID ' . $postImage->id . ' for post ' . $post->id);
                
            } catch (\Exception $e) {
                Log::error('Image upload failed for post ' . $post->id . ': ' . $e->getMessage());
                Log::error('Stack trace: ' . $e->getTraceAsString());
            }
        }
    }
}
