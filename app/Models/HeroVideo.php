<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HeroVideo extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getVideoUrlAttribute(): ?string
    {
        if (! filled($this->video_path)) {
            return null;
        }

        if (str_starts_with($this->video_path, 'http://') || str_starts_with($this->video_path, 'https://')) {
            return $this->video_path;
        }

        return Storage::disk('public')->url($this->video_path);
    }

    public function getPosterUrlAttribute(): ?string
    {
        if (! filled($this->poster_image)) {
            return null;
        }

        if (str_starts_with($this->poster_image, 'http://') || str_starts_with($this->poster_image, 'https://')) {
            return $this->poster_image;
        }

        if (str_starts_with($this->poster_image, 'image/')) {
            return asset($this->poster_image);
        }

        return Storage::disk('public')->url($this->poster_image);
    }
}
