<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $guarded = [];

    protected $casts = [
        'is_read' => 'boolean',
    ];

    public function getGuidelineFileUrlAttribute(): ?string
    {
        if (empty($this->guideline_file)) {
            return null;
        }

        return asset('storage/'.$this->guideline_file);
    }

    public function getSampleFileUrlAttribute(): ?string
    {
        if (empty($this->sample_file)) {
            return null;
        }

        return asset('storage/'.$this->sample_file);
    }

    public function getIsFreeTrialAttribute(): bool
    {
        return $this->type === 'free_trial';
    }
}
