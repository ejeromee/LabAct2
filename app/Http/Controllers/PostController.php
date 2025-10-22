<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        // Debugging output
        Log::info('Active posts count: ' . $posts->total());
        
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
        // Debugging output
        Log::info('Archived posts count: ' . $archivedPosts->total());
        
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
        // validate yung input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $validated['excerpt'] = substr($validated['content'], 0, 100) . (strlen($validated['content']) > 100 ? '...' : '');

        $validated['user_id'] = Auth::id();

        Post::create($validated);

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
            'category_id' => 'nullable|exists:categories,id'
        ]);

        $validated['excerpt'] = substr($validated['content'], 0, 100) . (strlen($validated['content']) > 100 ? '...' : '');

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
}
