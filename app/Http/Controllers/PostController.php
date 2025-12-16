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
     * Display a listing of posts for guests (public view).
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function guestIndex(): View
    {
        $posts = Post::with(['user', 'category'])
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        $categories = \App\Models\Category::orderBy('name')->get();

        return view('guest.posts.index', compact('posts', 'categories'));
    }

    /**
     * Display a specific post for guests (public view).
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function guestShow($id): View
    {
        $post = Post::with(['user', 'category', 'images'])->findOrFail($id);

        return view('guest.posts.show', compact('post'));
    }

    /**
     * Display a listing of the current user's posts.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function userIndex(): View
    {
        $posts = Post::with(['user', 'category'])
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $categories = \App\Models\Category::orderBy('name')->get();

        $totalPosts = Post::where('user_id', Auth::id())->count();
        $publishedPosts = Post::where('user_id', Auth::id())->count();
        $monthlyPosts = Post::where('user_id', Auth::id())
            ->whereMonth('created_at', now()->month)
            ->count();

        return view('user.posts.index', compact('posts', 'categories', 'totalPosts', 'publishedPosts', 'monthlyPosts'));
    }

    /**
     * Display a specific post for the current user.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function userShow($id): View
    {
        $post = Post::with(['user', 'category', 'images'])
            ->where('user_id', Auth::id())
            ->findOrFail($id);

        return view('user.posts.show', compact('post'));
    }

    /**
     * Show the form for editing a user's own post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function userEdit($id): View
    {
        $post = Post::where('user_id', Auth::id())->findOrFail($id);
        $categories = \App\Models\Category::orderBy('name')->get();

        return view('user.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update a user's own post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userUpdate(Request $request, $id): RedirectResponse
    {
        $post = Post::where('user_id', Auth::id())->findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
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

        return redirect()->route('user.posts.index')
            ->with('success', 'Post updated successfully!');
    }

    /**
     * Delete a user's own post (soft delete).
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userDestroy($id): RedirectResponse
    {
        $post = Post::where('user_id', Auth::id())->findOrFail($id);
        
        $post->delete(); // Soft delete

        return redirect()->route('user.posts.index')
            ->with('success', 'Post moved to trash successfully!');
    }

    /**
     * Archive a user's own post (soft delete).
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userArchive($id): RedirectResponse
    {
        $post = Post::where('user_id', Auth::id())->findOrFail($id);
        
        $post->delete(); // Soft delete

        return redirect()->route('user.posts.index')
            ->with('success', 'Post archived successfully!');
    }

    /**
     * Force delete a user's own post (permanent deletion).
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userForceDelete($id): RedirectResponse
    {
        $post = Post::withTrashed()->where('user_id', Auth::id())->findOrFail($id);
        
        // Delete associated images
        foreach ($post->images as $image) {
            if (file_exists(public_path($image->image_path))) {
                unlink(public_path($image->image_path));
            }
            if (file_exists(public_path($image->thumbnail_path))) {
                unlink(public_path($image->thumbnail_path));
            }
            $image->delete();
        }
        
        $post->forceDelete(); // Permanent delete

        return redirect()->route('user.archives.index')
            ->with('success', 'Post permanently deleted!');
    }

    /**
     * Display archived posts for the current user.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function userArchives(): View
    {
        $archivedPosts = Post::onlyTrashed()
            ->with(['user', 'category'])
            ->where('user_id', Auth::id())
            ->orderBy('deleted_at', 'desc')
            ->paginate(10);

        return view('user.archives.index', compact('archivedPosts'));
    }

    /**
     * Restore a user's archived post.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function userRestore($id): RedirectResponse
    {
        $post = Post::withTrashed()->where('user_id', Auth::id())->findOrFail($id);
        
        $post->restore();

        return redirect()->route('user.archives.index')
            ->with('success', 'Post restored successfully!');
    }

    /**
     * Display a listing of the posts (legacy method for backward compatibility).
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        return $this->guestIndex();
    }

    /**
     * Display the specified post (legacy method for backward compatibility).
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id): View
    {
        return $this->guestShow($id);
    }

    /**
     * List all active posts for admin with enhanced data.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function list(): View
    {
        $posts = Post::with(['user', 'category'])
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        
        $categories = \App\Models\Category::all();
        $authors = \App\Models\User::has('posts')->get();
        
        // Current month stats
        $totalPosts = Post::count();
        $publishedPosts = Post::count();
        $totalCategories = \App\Models\Category::count();
        $thisMonthPosts = Post::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        
        // Last month stats for comparison
        $lastMonthPosts = Post::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();
        
        // Calculate percentage changes
        $postsGrowth = $lastMonthPosts > 0 
            ? round((($thisMonthPosts - $lastMonthPosts) / $lastMonthPosts) * 100) 
            : ($thisMonthPosts > 0 ? 100 : 0);
        
        $stats = [
            'total' => $totalPosts,
            'published' => $publishedPosts,
            'categories' => $totalCategories,
            'thisMonth' => $thisMonthPosts,
            'postsGrowth' => $postsGrowth,
        ];
        
        return view('admin.posts.enhanced-index', compact('posts', 'categories', 'authors', 'stats'));
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
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id): View
    {
        $post = Post::with('user', 'images')->findOrFail($id);
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
    /**
     * Soft delete (archive) a post - alias for archive()
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', 'Post archived successfully!');
    }

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
     * Archive multiple posts at once
     */
    public function bulkArchive(Request $request): RedirectResponse
    {
        $postIds = $request->input('post_ids', []);
        
        if (empty($postIds)) {
            return redirect()->route('admin.posts.index')
                ->with('error', 'No posts selected.');
        }

        $count = Post::whereIn('id', $postIds)->delete();

        return redirect()->route('admin.posts.index')
            ->with('success', "{$count} post(s) archived successfully!");
    }

    /**
     * Restore multiple posts at once
     */
    public function bulkRestore(Request $request): RedirectResponse
    {
        $ids = json_decode($request->input('ids'), true);
        
        if (!is_array($ids) || empty($ids)) {
            return redirect()->route('admin.archives.index')
                ->with('error', 'No posts selected.');
        }

        $count = Post::withTrashed()->whereIn('id', $ids)->restore();

        return redirect()->route('admin.archives.index')
            ->with('success', "{$count} post(s) restored successfully!");
    }

    /**
     * Permanently delete multiple posts at once
     */
    public function bulkDelete(Request $request): RedirectResponse
    {
        $ids = json_decode($request->input('ids'), true);
        
        if (!is_array($ids) || empty($ids)) {
            return redirect()->route('admin.archives.index')
                ->with('error', 'No posts selected.');
        }

        $posts = Post::withTrashed()->whereIn('id', $ids)->get();
        $count = $posts->count();

        foreach ($posts as $post) {
            $post->forceDelete();
        }

        return redirect()->route('admin.archives.index')
            ->with('success', "{$count} post(s) permanently deleted!");
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
