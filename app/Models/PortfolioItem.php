<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
{
    protected $guarded = [];

    protected $casts = [
        'tags' => 'array',
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('image/team-1.jpg');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'image/')) {
            return asset($this->image);
        }

        return asset('storage/'.$this->image);
    }

    public function getBeforeImageUrlAttribute(): ?string
    {
        if (empty($this->before_image)) {
            return null;
        }

        if (str_starts_with($this->before_image, 'http://') || str_starts_with($this->before_image, 'https://')) {
            return $this->before_image;
        }

        if (str_starts_with($this->before_image, 'image/')) {
            return asset($this->before_image);
        }

        return asset('storage/'.$this->before_image);
    }

    public function getAfterImageUrlAttribute(): ?string
    {
        if (empty($this->after_image)) {
            return null;
        }

        if (str_starts_with($this->after_image, 'http://') || str_starts_with($this->after_image, 'https://')) {
            return $this->after_image;
        }

        if (str_starts_with($this->after_image, 'image/')) {
            return asset($this->after_image);
        }

        return asset('storage/'.$this->after_image);
    }

    public function getHasBeforeAfterAttribute(): bool
    {
        return ! empty($this->before_image) && ! empty($this->after_image);
    }
}
