<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

// Guest
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware(['role:user'])->prefix('user')->group(function () {
        Route::get('/posts/create', [PostController::class, 'create'])->name('user.posts.create');
        Route::post('/posts', [PostController::class, 'store'])->name('user.posts.store');
    });

    // Admin
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        // Post Management
        Route::get('/posts', [PostController::class, 'list'])->name('admin.posts.index');
        Route::get('/archives/index', [PostController::class, 'showArchive'])->name('admin.archives.index');
        Route::get('/posts/create', [PostController::class, 'create'])->name('admin.posts.create');
        Route::post('/posts', [PostController::class, 'store'])->name('admin.posts.store');
        Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('admin.posts.edit');
        Route::put('/posts/{id}', [PostController::class, 'update'])->name('admin.posts.update');
        Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('admin.posts.destroy');
        Route::delete('/archives/index/{id}', [PostController::class, 'destroyPermanent'])->name('admin.archives.destroy');
        Route::delete('/posts/archive/{id}', [PostController::class, 'archive'])->name('admin.posts.archive');
        Route::patch('/posts/restore/{id}', [PostController::class, 'restore'])->name('admin.posts.restore');

        // Category Management
        Route::get('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/categories/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/categories', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/categories/{id}/edit', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/categories/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/categories/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.categories.destroy');
        
        // User Management
        Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/{id}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin.users.destroy');
        Route::delete('/users/archive/{id}', [App\Http\Controllers\Admin\UserController::class, 'archive'])->name('admin.users.archive');
    });
});
