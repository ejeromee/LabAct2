<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'image_path',
        'thumbnail_path',
        'original_name',
        'file_size',
        'order',
        'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'file_size' => 'integer',
        'order' => 'integer'
    ];

    /**
     * Get the post that owns the image
     */
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Get the full image URL
     */
    public function getImageUrlAttribute(): string
    {
        return asset($this->image_path);
    }

    /**
     * Get the thumbnail URL
     */
    public function getThumbnailUrlAttribute(): string
    {
        return $this->thumbnail_path ? asset($this->thumbnail_path) : $this->image_url;
    }

    /**
     * Get formatted file size
     */
    public function getFormattedSizeAttribute(): string
    {
        if (!$this->file_size) return 'Unknown';
        
        $units = ['B', 'KB', 'MB', 'GB'];
        $power = $this->file_size > 0 ? floor(log($this->file_size, 1024)) : 0;
        return number_format($this->file_size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
    }
}
