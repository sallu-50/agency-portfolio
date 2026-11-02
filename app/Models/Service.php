<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getButtonTextAttribute(?string $value): string
    {
        if (! empty($value)) {
            return $value;
        }

        return match ($this->slug) {
            'computer-vision', 'image-annotation' => 'Explore image annotation',
            'video-annotation' => 'Explore video annotation',
            'lidar-3d' => 'Explore LiDAR annotation',
            'nlp' => 'Explore NLP annotation',
            'audio-annotation' => 'Explore audio annotation',
            'data-collection' => 'Explore data collection',
            default => 'Explore '.strtolower($this->title),
        };
    }
}
