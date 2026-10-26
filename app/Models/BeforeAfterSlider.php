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
        return $this->resolveImageUrl($this->before_image, 'image/team-2.jpg');
    }

    public function getAfterImageUrlAttribute(): string
    {
        return $this->resolveImageUrl($this->after_image, 'image/team-3.jpg');
    }

    public function getBeforeImage2UrlAttribute(): ?string
    {
        return $this->before_image_2 ? $this->resolveImageUrl($this->before_image_2, 'image/team-4.jpg') : null;
    }

    public function getAfterImage2UrlAttribute(): ?string
    {
        return $this->after_image_2 ? $this->resolveImageUrl($this->after_image_2, 'image/team-5.jpg') : null;
    }

    public function getBeforeImage3UrlAttribute(): ?string
    {
        return $this->before_image_3 ? $this->resolveImageUrl($this->before_image_3, 'image/team-6.jpg') : null;
    }

    public function getAfterImage3UrlAttribute(): ?string
    {
        return $this->after_image_3 ? $this->resolveImageUrl($this->after_image_3, 'image/team-7.jpg') : null;
    }

    protected function resolveImageUrl(?string $path, string $fallback): string
    {
        if (empty($path)) {
            return asset($fallback);
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'image/')) {
            return asset($path);
        }

        return asset('storage/'.$path);
    }

    /**
     * Get list of active image comparison pairs for this section (up to 3 items).
     *
     * @return array<int, array{id: string, before: string, after: string, alt: string}>
     */
    public function getSliderItems(): array
    {
        $items = [];

        if (filled($this->before_image) || filled($this->after_image)) {
            $items[] = [
                'id' => 'slider-'.$this->id.'-1',
                'before' => $this->before_image_url,
                'after' => $this->after_image_url,
                'alt' => $this->title ? $this->title.' - Comparison 1' : 'Comparison 1',
            ];
        }

        if (filled($this->before_image_2) && filled($this->after_image_2)) {
            $items[] = [
                'id' => 'slider-'.$this->id.'-2',
                'before' => $this->before_image_2_url,
                'after' => $this->after_image_2_url,
                'alt' => $this->title ? $this->title.' - Comparison 2' : 'Comparison 2',
            ];
        }

        if (filled($this->before_image_3) && filled($this->after_image_3)) {
            $items[] = [
                'id' => 'slider-'.$this->id.'-3',
                'before' => $this->before_image_3_url,
                'after' => $this->after_image_3_url,
                'alt' => $this->title ? $this->title.' - Comparison 3' : 'Comparison 3',
            ];
        }

        return $items;
    }
}
