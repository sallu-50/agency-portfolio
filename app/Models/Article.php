<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'views_count' => 'integer',
        'sort_order' => 'integer',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('image/crack-defect-raw.jpg');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'image/')) {
            return asset($this->image);
        }

        return asset('storage/'.$this->image);
    }

    public function getFormattedDateAttribute(): string
    {
        return ($this->published_at ?? $this->created_at)?->format('M d, Y') ?? '';
    }
}
