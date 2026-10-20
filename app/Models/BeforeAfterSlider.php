<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeforeAfterSlider extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
        'sort_order' => 'integer',
    ];

    public function getDisplayTitleAttribute(): string
    {
        return filled($this->title) ? $this->title : 'Project #'.$this->id;
    }

    public function getBeforeImageUrlAttribute(): string
    {
        if (empty($this->before_image)) {
            return asset('image/team-2.jpg');
        }

        if (str_starts_with($this->before_image, 'http://') || str_starts_with($this->before_image, 'https://')) {
            return $this->before_image;
        }

        if (str_starts_with($this->before_image, 'image/')) {
            return asset($this->before_image);
        }

        return asset('storage/'.$this->before_image);
    }

    public function getAfterImageUrlAttribute(): string
    {
        if (empty($this->after_image)) {
            return asset('image/team-3.jpg');
        }

        if (str_starts_with($this->after_image, 'http://') || str_starts_with($this->after_image, 'https://')) {
            return $this->after_image;
        }

        if (str_starts_with($this->after_image, 'image/')) {
            return asset($this->after_image);
        }

        return asset('storage/'.$this->after_image);
    }
}
