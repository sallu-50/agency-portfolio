<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamMember extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function getImageUrlAttribute(): string
    {
        if (empty($this->image)) {
            return asset('image/team/salman.png');
        }

        if (str_starts_with($this->image, 'http://') || str_starts_with($this->image, 'https://')) {
            return $this->image;
        }

        if (str_starts_with($this->image, 'image/') || str_starts_with($this->image, '/image/')) {
            return asset($this->image);
        }

        return asset('storage/'.$this->image);
    }
}
