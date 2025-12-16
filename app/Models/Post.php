<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'image',
        'excerpt',
        'user_id',
        'category_id',
    ];

    /**
     * Get the user that owns the post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    /**
     * Get the category that the post belongs to.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get all images for this post
     */
    public function images()
    {
        return $this->hasMany(PostImage::class)->orderBy('order');
    }

    /**
     * Get the featured image for this post
     */
    public function featuredImage()
    {
        return $this->hasOne(PostImage::class)->where('is_featured', true);
    }

    /**
     * Get the first image as featured if no featured image is set
     */
    public function getMainImageAttribute()
    {
        $featured = $this->featuredImage;
        if ($featured) {
            return $featured;
        }
        
        $firstImage = $this->images()->first();
        if ($firstImage) {
            return $firstImage;
        }
        
        // Fallback to legacy single image
        if ($this->image) {
            return (object) [
                'image_path' => $this->image,
                'thumbnail_path' => $this->thumbnail ? 'storage/posts/thumbnails/' . basename($this->image) : $this->image,
                'image_url' => asset($this->image),
                'thumbnail_url' => $this->thumbnail
            ];
        }
        
        return null;
    }

    /**
     * Get the thumbnail URL for the post image
     * 
     * @return string|null
     */
    public function getThumbnailAttribute(): ?string
    {
        if (!$this->image) {
            return null;
        }

        $filename = basename($this->image);
        $thumbnailPath = 'storage/posts/thumbnails/' . $filename;
        
        // Check if thumbnail exists, otherwise return original
        if (file_exists(public_path($thumbnailPath))) {
            return asset($thumbnailPath);
        }
        
        return asset($this->image);
    }

    /**
     * Get the full image URL
     * 
     * @return string|null
     */
    public function getImageUrlAttribute(): ?string
    {
        return $this->image ? asset($this->image) : null;
    }

    /**
     * Check if post has any images (multiple or single)
     * 
     * @return bool
     */
    public function hasImage(): bool
    {
        return $this->images()->count() > 0 || (!empty($this->image) && file_exists(public_path($this->image)));
    }

    /**
     * Check if post has multiple images
     * 
     * @return bool
     */
    public function hasMultipleImages(): bool
    {
        return $this->images()->count() > 1;
    }

    /**
     * Get total number of images
     * 
     * @return int
     */
    public function getImageCountAttribute(): int
    {
        $count = $this->images()->count();
        if ($count === 0 && $this->image) {
            return 1; 
        }
        return $count;
    }
}
